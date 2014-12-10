<?php

use Carbon\Carbon;
use Illuminate\View\View;

class EquipmentCalendarComposer
{
    protected $result;
    protected $week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    public function compose(View $view)
    {
        $firstDay = $this->getCurrentMonth();
        $today = Carbon::now();
        $weekday = $firstDay->dayOfWeek;

        $this->openTable();
        $this->getControls($firstDay);
        $this->getWeekNames();
        $this->getBeforeDays($firstDay->dayOfWeek);
        $this->getMonth($firstDay, $today, $weekday);
        $this->getAfterDays($weekday);
        $this->closeTable();

        $view->with('calendar', $this->result);
    }

    protected function getAfterDays($weekday)
    {
        for($i = $weekday; $i < 7; $i++) {
            $this->result .= '<td></td>';
        }

        $this->result .= '</tr>';
    }

    protected function getMonth(Carbon $firstDay, Carbon $today, &$weekday)
    {
        for($day = 1; $day <= $firstDay->daysInMonth; $day++) {
            $date = Carbon::createFromDate($firstDay->year, $firstDay->month, $day);

            $this->result .= '<td>' . $this->getDay($date, $today) . '</td>';

            $weekday++;
            if($weekday >= 7) {
                $weekday = 0;
                $this->result .= '</tr><tr>';
            }
        }
    }

    protected function getDay(Carbon $date, Carbon $today)
    {
        $class = ['btn', 'btn-block', 'day'];

        if($date < $today) {
            return '<div class="day">' . $date->day . '</div>';
        } elseif ($date == $today) {
            $class[] = 'btn-primary';
        } else {
            $class[] = 'btn-default';
        }

        $url = URL::current() . '?date=' . $date->format('Y-m-d');

        return link_to($url, $date->day, ['class' => implode(' ', $class)]);
    }

    protected function getBeforeDays($weekday)
    {
        $this->result .= '<tr>';

        for($i = 0; $i < $weekday; $i++) {
            $this->result .= '<td></td>';
        }
    }

    protected function getWeekNames()
    {
        $this->result .= '<tr>';

        foreach($this->week as $day) {
            $this->result .= '<th class="text-center">' . $day . '</th>';
        }

        $this->result .= '</tr>';
    }

    protected function getControls(Carbon $date)
    {
        $prev = clone $date;
        $next = clone $date;

        $prev->subMonth();
        $next->addMonth();

        $prev = $prev->format('Y-m');
        $next = $next->format('Y-m');

        $this->result .= '<tr>';
        $this->result .= '<th colspan="7" class="text-center clearfix">';
        $this->result .= link_to(URL::current() . '?cdate=' . $prev, 'Previous', ['class' => 'btn btn-default pull-left']);
        $this->result .= $date->format('F Y');
        $this->result .= link_to(URL::current() . '?cdate=' . $next, 'Next', ['class' => 'btn btn-default pull-right']);
        $this->result .= '</th>';
        $this->result .= '</tr>';
    }

    protected function openTable()
    {
        $this->result = '<table class="table">';
    }

    protected function closeTable()
    {
        $this->result .= '</table>';
    }

    protected function getCurrentMonth()
    {
        $date = date('Y-m-d');
        if(Input::has('cdate')) {
            $date = Input::get('cdate');
        }

        $parts = explode('-', $date);
        $parts[2] = 1;

        return Carbon::createFromDate($parts[0], $parts[1], $parts[2]);
    }
}
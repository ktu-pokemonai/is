<?php

use Carbon\Carbon;
use Illuminate\View\View;

class EquipmentDayComposer
{
    public function getDay(Equipment $item, $date)
    {
        $result = [];
        $reservations = $item->reservations;
        $from = $item->from();
        $to = $item->to();

        if($from == 0 && $to == 0) {
            $to = 1440;
        }

        for($min = 0; $min < $from; $min += $item->duration) {
            $result[$min] = 'disabled';
        }

        for(;$min < $to; $min += $item->duration) {
            if($this->isReserved($min, $reservations, $date, $me)) {
                if($me) {
                    $result[$min] = 'me';
                } else {
                    $result[$min] = 'taken';
                }
            } else {
                $result[$min] = 'open';
            }
        }

        for(;$min < 1440; $min += $item->duration) {
            $result[$min] = 'disabled';
        }

        return $result;
    }

    public function compose(View $view)
    {
        /** @var Equipment $item */
        $item = $view->equipment;

        $result = $this->getDay($item, Input::get('date'));

        $view->with('day', $result);
    }

    protected function isReserved($time, $reservations, $date, &$me = false)
    {
        list($year, $month, $day) = explode('-', $date);
        list($hour, $minutes) = explode(':', min_to_time($time));
        $time = mktime($hour, $minutes, 0, $month, $day, $year);

        /** @var Reservation $reservation */
        foreach($reservations as $reservation) {
            /** @var Carbon $date */
            $date = $reservation->reserved_at;
            if($date->getTimestamp() == $time) {
                if($reservation->user_id == Auth::user()->id) {
                    $me = true;
                }

                return true;
            }
        }

        return false;
    }
} 
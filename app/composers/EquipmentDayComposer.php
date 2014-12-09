<?php

use Carbon\Carbon;
use Illuminate\View\View;

class EquipmentDayComposer
{
    public function compose(View $view)
    {
        /** @var Equipment $item */
        $item = $view->equipment;
        $result = [];
        $reservations = $item->reservations;

        for($min = 0; $min < $item->from(); $min += $item->duration) {
            $result[$min] = 'disabled';
        }

        for(;$min < $item->to(); $min += $item->duration) {
            if($this->isReserved($min, $reservations, $me)) {
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

        $view->with('day', $result);
    }

    protected function isReserved($time, $reservations, &$me = false)
    {
        list($year, $month, $day) = explode('-', Input::get('date'));
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
<?php

use Carbon\Carbon;

class ReservationsController extends \BaseController {

	public function index()
	{
        $rooms = Room::with(['equipment'])->get();

		return View::make('user.reservations.index', compact('rooms'));
	}

	public function store()
	{
        $validator = Validator::make($data = Input::all(), ['room_id' => 'required|exists:rooms,id']);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        /** @var Room $room */
        $room = Room::findOrFail($data['room_id']);
        $user = Auth::user();

        /** @var $item Equipment */
        /** @var $time Carbon */
        $result = $room->findEmptyTime(time());

        if(!$result) {
            return $this->routeWarning('user.equipment.index', 'Time suitable for reservation not found.');
        }

        list($item, $time) = $result;

        $res = Reservation::create(['user_id' => $user->id, 'equipment_id' => $item->id, 'reserved_at' => $time]);

        return $this->routeSuccess('user.equipment.index', sprintf('You have reserved %s at %s', $item->name, $time->format('Y-m-d H:i')));
	}

	public function show($id)
	{
		$equipment = Equipment::findOrFail($id);

        if(!Input::has('date')) {
            return View::make('user.reservations.calendar', compact('equipment'));
        }

        return View::make('user.reservations.show', compact('equipment'));
	}

	public function update($id)
	{
        $date = Input::get('date');
        $time = min_to_time(Input::get('time')) . ':00';

        $dateTime = Carbon::createFromFormat('Y-m-d H:i:s',$date . ' ' . $time);
        $user = Auth::user();

		$reg = Reservation::create(['user_id' => $user->id, 'equipment_id' => $id, 'reserved_at' => $dateTime]);

        return $this->routeSuccess('user.equipment.show', 'You were registered successfully', ['equipment' => $id, 'date' => $date]);
	}

	public function destroy($id)
	{
		//
	}

}
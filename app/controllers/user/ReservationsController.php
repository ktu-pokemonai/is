<?php

use Carbon\Carbon;

class ReservationsController extends \BaseController {

	public function index()
	{
        $rooms = Room::with(['equipment'])->get();

		return View::make('user.reservations.index', compact('rooms'));
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		$equipment = Equipment::findOrFail($id);

        if(!Input::has('date')) {
            return View::make('user.reservations.calendar', compact('equipment'));
        }

        return View::make('user.reservations.show', compact('equipment'));
	}

	public function edit($id)
	{
		//
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
<?php

class ReservationsController extends \BaseController {

	public function index()
	{
        $equipment = Equipment::join('rooms', 'room_id', '=', 'rooms.id')
            ->orderBy('rooms.name')
            ->orderBy('equipment.name')
            ->with('room')
            ->get(['equipment.*']);

		return View::make('user.reservations.index', compact('equipment'));
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
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
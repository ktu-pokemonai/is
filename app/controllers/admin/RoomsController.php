<?php

class RoomsController extends \BaseController {

	/**
	 * Display a listing of rooms
	 *
	 * @return Response
	 */
	public function index()
	{
		$rooms = Room::all();

		return View::make('admin.rooms.index', compact('rooms'));
	}

	/**
	 * Show the form for creating a new room
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.rooms.create');
	}

	/**
	 * Store a newly created room in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Room::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        /** @var Room $room */
		$room = Room::create($data);

        if(Input::has('save_close')) {
            return Redirect::route('admin.rooms.index');
        }

        return Redirect::route('admin.rooms.create');

    }

	/**
	 * Display the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$room = Room::find($id);

		return View::make('admin.rooms.edit', compact('room'));
	}

	/**
	 * Update the specified room in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$room = Room::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Room::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$room->update($data);

		return Redirect::route('rooms.index');
	}

	/**
	 * Remove the specified room from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Room::destroy($id);

		return Redirect::route('admin.rooms.index');
	}

}

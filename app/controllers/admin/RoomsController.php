<?php

class RoomsController extends \BaseController {

	/**
	 * Display a listing of rooms
	 *
	 * @return Response
	 */
	public function index()
	{
		$rooms = Room::with(['equipment', 'keys'])->get();

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

        return $this->routeSaveClose('admin.rooms.create', 'admin.rooms.index', 'Room created successfully');
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

        $message = 'Room updated successfully';
        if(Input::has('save_close')) {
            return $this->routeSuccess('admin.rooms.index', $message);
        }

        return $this->routeSuccess('admin.rooms.edit', $message, [$room->id]);
	}

	/**
	 * Remove the specified room from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        /** @var Room $room */
        $room = Room::findOrFail($id);

        if(!$room->equipment->isEmpty()) {
            return $this->routeWarning('admin.rooms.index', 'Cannot remove room with equipment!');
        }

        if(!$room->keys->isEmpty()) {
            return $this->routeWarning('admin.rooms.index', 'Cannot remove room with keys!');
        }

		Room::destroy($id);

        return $this->routeSuccess('admin.rooms.index', 'Room removed successfully');
	}

}

<?php

class KeysController extends \BaseController {

    public function index($id)
    {
        $room = Room::findOrFail($id);
        $keys = Key::where('room_id', '=', $id)->get();

        return View::make('admin.keys.index', compact('room', 'keys'));
    }

    public function create($id)
    {
    }

    public function store($id)
    {
        $room = Room::findOrFail($id);
        $data = ['room_id' => $room->id];

        /** @var Equipment $equipment */
        Key::create($data);

        return Redirect::route('admin.rooms.keys.index', [$room->id]);
    }

    public function edit($roomId, $id)
    {
    }

    public function update($roomId, $id)
    {
    }

    public function destroy($roomId, $id)
    {
        Key::destroy($id);

        return Redirect::route('admin.rooms.keys.index', [$roomId]);
    }

}
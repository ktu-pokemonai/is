<?php

class KeysController extends \BaseController {

    public function index($id)
    {
        $room = Room::findOrFail($id);
        $keys = Key::where('room_id', '=', $id)->get();

        return View::make('admin.keys.index', compact('room', 'keys'));
    }

    public function store($id)
    {
        $room = Room::findOrFail($id);
        $data = ['room_id' => $room->id];

        /** @var Equipment $equipment */
        Key::create($data);

        return $this->routeSuccess('admin.rooms.keys.index', 'Key created successfully', [$room->id]);
    }

    public function destroy($roomId, $id)
    {
        Key::destroy($id);

        return $this->routeSuccess('admin.rooms.keys.index', 'Key removed successfully', [$roomId]);
    }

}
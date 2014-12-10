<?php

class EquipmentController extends \BaseController {

	public function index($id)
	{
		$room = Room::findOrFail($id);
        $equipment = Equipment::where('room_id', '=', $id)->get();

        return View::make('admin.equipment.index', compact('room', 'equipment'));
	}

	public function create($id)
	{
        $room = Room::findOrFail($id);

        return View::make('admin.equipment.create', compact('room'));
    }

	public function store($id)
	{
        $room = Room::findOrFail($id);
        $data = ['room_id' => $room->id] + Input::all();
        $validator = Validator::make($data, Equipment::$rules);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        /** @var Equipment $equipment */
        $equipment = Equipment::create($data);

        $message = 'Equipment created successfully.';
        if(Input::has('save_close')) {
            return $this->routeSuccess('admin.rooms.equipment.index', $message, [$room->id]);
        }

        return $this->routeSuccess('admin.rooms.equipment.create', $message, [$room->id]);
	}

	public function edit($roomId, $id)
	{
        $room = Room::findOrFail($roomId);
        $equipment = Equipment::findOrFail($id);

        return View::make('admin.equipment.edit', compact('room', 'equipment'));
	}

	public function update($roomId, $id)
	{
        /** @var Room $room */
        $room = Room::findOrFail($roomId);
        /** @var Equipment $equipment */
        $equipment = Equipment::findOrFail($id);

        $equipment->update(Input::all());

        $message = 'Equipment updated successfully';
        if(Input::has('save_close')) {
            return $this->routeSuccess('admin.rooms.equipment.index', $message, [$room->id]);
        }

        return $this->routeSuccess('admin.rooms.equipment.edit', $message, [$room->id, $equipment->id]);
	}

	public function destroy($roomId, $id)
	{
        /** @var Equipment $equipment */
        Equipment::destroy($id);

        return Redirect::route('admin.rooms.equipment.index', [$roomId]);
	}

}
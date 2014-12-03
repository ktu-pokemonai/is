<div class="btn-group btn-group-sm">
    {{ button(route('admin.rooms.equipment.edit', [$room->id, $device->id]), '', 'btn btn-warning', 'fa fa-pencil') }}
    <button class="btn btn-danger" type="submit" form="delete-form" formaction="{{ route('admin.rooms.equipment.destroy', [$room->id, $device->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
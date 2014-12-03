<div class="btn-group btn-group-sm">
    {{ button(route('admin.rooms.equipment.index', [$room->id]), '', 'btn btn-default', 'fa fa-desktop') }}
    {{ button(route('admin.rooms.keys.index', [$room->id]), '', 'btn btn-info', 'fa fa-key') }}
    {{ button(route('admin.rooms.edit', [$room->id]), '', 'btn btn-warning', 'fa fa-pencil') }}
    <button class="btn btn-danger" type="submit" form="delete-form" formaction="{{ route('admin.rooms.destroy', [$room->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="btn-group btn-group-sm">
    <button class="btn btn-danger" type="submit" form="delete-form" formaction="{{ route('admin.rooms.keys.destroy', [$room->id, $key->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
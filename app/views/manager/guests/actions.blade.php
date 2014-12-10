<div class="btn-group btn-group-sm">
    <a class="btn btn-warning" href="{{ route('manager.guests.edit',[$guest->id]) }}" title="Edit">
        <i class="fa fa-pencil"></i>
    </a>
    <button class="btn btn-danger" type="submit" form="delete-form" formaction="{{ route('manager.guests.destroy', [$guest->id]) }}" title="Guest left">
        <i class="fa fa-hand-o-right"></i>
    </button>
</div>
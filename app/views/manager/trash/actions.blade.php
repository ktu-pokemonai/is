<div class="btn-group btn-group-sm">
    <button class="btn btn-danger" type="submit" form="delete-trash" formaction="{{ route('manager.trash.destroy', [$trash->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
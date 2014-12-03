<div class="btn-group btn-group-sm">
    {{ button(route('admin.images.edit', [$image->id]), 'Edit', 'btn btn-warning', 'fa fa-btn fa-pencil') }}
    <button class="btn btn-danger" type="submit" form="delete-form" formaction="{{ route('admin.images.destroy',[$image->id]) }}">
        <i class="fa fa-btn fa-times"></i>
        Remove
    </button>
</div>
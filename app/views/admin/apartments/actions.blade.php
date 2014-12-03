<div class="btn-group btn-group-sm">
    <button class="btn btn-danger" type="submit" form="delete-apartment" formaction="{{ route('admin.apartments.destroy', [$apartment->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="btn-group btn-group-sm">
    <button class="btn btn-danger" type="submit" form="remove-penalty" formaction="{{ route('admin.penalties.destroy', [$penalty->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="btn-group btn-group-sm">
    {{ button(route('admin.registrations.edit', [$registration->id]), 'Approve', 'btn btn-primary', 'fa fa-check') }}
    <button type="submit" class="btn btn-danger" form="delete-form" formaction="{{ route('admin.registrations.destroy', [$registration->id]) }}">
        <i class="fa fa-btn fa-times"></i>
        Remove
    </button>
</div>
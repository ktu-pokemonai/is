<div class="btn-group btn-group-sm">
    <button class="btn btn-danger" type="submit" form="remove-message" formaction="{{ route('admin.messages.destroy', [$message->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="btn-group btn-group-sm">
    {{--<a class="btn btn-info" href="{{ route('admin.articles.show') }}">
        <i class="fa fa-eye"></i>
    </a>--}}
    <a class="btn btn-warning" href="{{ route('admin.articles.edit', [$article->id]) }}">
        <i class="fa fa-pencil"></i>
    </a>
    <button class="btn btn-danger" type="submit" form="remove-article" formaction="{{ route('admin.articles.destroy', [$article->id]) }}">
        <i class="fa fa-times"></i>
    </button>
</div>
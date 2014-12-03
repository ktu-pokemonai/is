<div class="form-group">
    {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('short_text', 'Short text', ['class' => 'control-label']) }}
    {{ Form::textarea('short_text', null, ['class' => 'form-control', 'rows' => 3]) }}
</div>

<div class="form-group">
    {{ Form::label('long_text', 'Long text', ['class' => 'control-label']) }}
    {{ Form::textarea('long_text', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <div class="checkbox">
        <label>
            {{ Form::checkbox('publish', true, (isset($article) && !is_null($article->published_on))) }}
            Publish
        </label>
    </div>
</div>

<div class="form-group">
    @include('admin.actions', ['back' => route('admin.articles.index')])
</div>
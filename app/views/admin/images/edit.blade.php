@extends('form', ['layout' => 'admin.layout', 'title' => 'Edit image', 'icon' => 'fa fa-picture-o'])

@section('form')
    {{ Form::model($image, ['route' => ['admin.images.update', $image->id], 'method' => 'put']) }}
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <a href="{{ route('gallery.show', [$image->id]) }}" class="thumbnail">
                  {{ HTML::image(route('gallery.show', [$image->id])) }}
                </a>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="form-group">
            {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) }}
        </div>

        @include('admin.actions', ['back' => route('admin.images.index')])
    {{ Form::close() }}
@stop
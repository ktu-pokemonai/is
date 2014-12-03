@extends('form', ['layout' => 'admin.layout', 'title' => 'Upload image', 'icon' => 'fa fa-picture-o'])

@section('form')
    {{ Form::open(['route' => 'admin.images.store', 'method' => 'post', 'files' => true]) }}
        <div class="form-group">
            {{ Form::label('image', 'Image', ['class' => 'control-label']) }}
            {{ Form::file('image') }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) }}
        </div>

        @include('admin.actions', ['back' => route('admin.images.index')])
    {{ Form::close() }}
@stop
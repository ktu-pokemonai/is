@extends('form', ['layout' => 'manager.layout', 'title' => 'Issue key', 'icon' => 'fa fa-key'])

@section('form')
    {{ Form::open(['route' => 'manager.keys.store', 'method' => 'post']) }}
        <div class="form-group">
            {{ Form::label('key_id', 'Key', ['class' => 'control-label']) }}
            {{ Form::select('key_id', Key::options(), null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('user_id', 'User', ['class' => 'control-label']) }}
            {{ Form::select('user_id', $userslist, null, ['class' => 'form-control']) }}
        </div>

        @include('manager.actions', ['back' => route('manager.keys.index')])
    {{ Form::close() }}
@stop
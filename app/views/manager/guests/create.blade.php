@extends('form', ['layout' => 'manager.layout', 'title' => 'Register guest', 'icon' => 'fa fa-user'])

@section('form')
    {{ Form::open(['route' => 'manager.guests.store', 'method' => 'post']) }}
        @include('manager.guests.form')

        @include('manager.actions', ['back' => route('manager.guests.index')])
    {{ Form::close() }}
@stop
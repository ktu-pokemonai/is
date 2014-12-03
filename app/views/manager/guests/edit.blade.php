@extends('form', ['layout' => 'manager.layout', 'title' => 'Register guest', 'icon' => 'fa fa-user'])

@section('form')
    {{ Form::model($guest, ['route' => ['manager.guests.update', $guest->id], 'method' => 'put']) }}
        @include('manager.guests.form')

        @include('manager.actions', ['back' => route('manager.guests.index')])
    {{ Form::close() }}
@stop
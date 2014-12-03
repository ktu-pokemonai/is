@extends('form', ['layout' => 'admin.layout', 'title' => 'Update room', 'icon' => 'fa fa-building'])

@section('form')
    {{ Form::model($room, ['route' => ['admin.rooms.update', $room->id], 'method' => 'put']) }}
        @include('admin.rooms.form')

        @include('admin.actions', ['back' => route('admin.rooms.index')])
    {{ Form::close() }}
@stop
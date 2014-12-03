@extends('form', ['layout' => 'admin.layout', 'title' => 'Update room', 'icon' => 'fa fa-building'])

@section('form')
    {{ Form::model($room, ['route' => ['admin.rooms.update', $room->id], 'method' => 'put']) }}
        @include('admin.rooms.form')
    {{ Form::close() }}
@stop
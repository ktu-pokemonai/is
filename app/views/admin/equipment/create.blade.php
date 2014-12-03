@extends('form', ['layout' => 'admin.layout', 'title' => 'Create equipment in ' . $room->name, 'icon' => 'fa fa-desktop'])

@section('form')
    {{ Form::open(['route' => ['admin.rooms.equipment.store', $room->id], 'method' => 'post']) }}
        @include('admin.equipment.form')
    {{ Form::close() }}
@stop
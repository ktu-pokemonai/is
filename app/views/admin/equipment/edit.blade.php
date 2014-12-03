@extends('form', ['layout' => 'admin.layout', 'title' => 'Update equipment for ' . $room->name, 'icon' => 'fa fa-desktop'])

@section('form')
    {{ Form::model($equipment, ['route' => ['admin.rooms.equipment.update', $room->id, $equipment->id], 'method' => 'put']) }}
        @include('admin.equipment.form')
    {{ Form::close() }}
@stop
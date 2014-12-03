@extends('form', ['layout' => 'admin.layout', 'title' => 'Create equipment in ' . $room->name, 'icon' => 'fa fa-desktop'])

@section('form')
    {{ Form::open(['route' => ['admin.rooms.equipment.store', $room->id], 'method' => 'post']) }}
        @include('admin.equipment.form')

        <div class="form-group">
            @include('admin.actions', ['back' => route('admin.rooms.equipment.index', [$room->id]), 'save' => 'Save & next'])
        </div>
    {{ Form::close() }}
@stop
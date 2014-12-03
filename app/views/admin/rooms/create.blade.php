@extends('form', ['layout' => 'admin.layout', 'title' => 'Create room', 'icon' => 'fa fa-building'])

@section('form')
    {{ Form::open(['route' => 'admin.rooms.store', 'method' => 'post']) }}
        @include('admin.rooms.form')

        @include('admin.actions', ['back' => route('admin.rooms.index'), 'save' => 'Save & next'])
    {{ Form::close() }}
@stop
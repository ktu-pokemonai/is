@extends('form', ['layout' => 'admin.layout', 'title' => 'Create room', 'icon' => 'fa fa-building'])

@section('form')
    {{ Form::open(['route' => 'admin.rooms.store', 'method' => 'post']) }}
        @include('admin.rooms.form')
    {{ Form::close() }}
@stop
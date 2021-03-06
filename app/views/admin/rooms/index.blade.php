@extends('admin.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-building"></i>
    Rooms
    {{ button(route('admin.rooms.create'), 'Create room', 'btn btn-success', 'fa fa-btn fa-plus') }}
</h1>
@stop

@section('content')
    @include('delete-form')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-center">Equipment / Keys / Capacity</th>
                <th class="col-md-2">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->name }}</td>
                <td class="text-center">{{ $room->equipment->count() }} / {{ $room->keys->count() }} / {{ $room->capacity }}</td>
                <td>@include('admin.rooms.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
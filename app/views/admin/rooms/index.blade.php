@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-building"></i>
        Rooms
        {{ button(route('admin.rooms.create'), 'Create room', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    @include('delete-form')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Equipment / Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->name }}</td>
                <td>{{ $room->equipment->count() }} / {{ $room->capacity }}</td>
                <td>@include('admin.rooms.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
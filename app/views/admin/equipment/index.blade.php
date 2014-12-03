@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-desktop"></i>
        Equipment for {{ $room->name }}
        {{ button(route('admin.rooms.equipment.create', [$room->id]), 'Create equipment', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    @include('delete-form')

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Capacity</th>
                <th>Schedule</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipment as $device)
            <tr>
                <td>{{ $device->name }}</td>
                <td>{{ $device->capacity }}</td>
                <td>{{ $device->from_min . ' - ' . $device->to_min }}</td>
                <td>{{ $device->duration }} min</td>
                <td>@include('admin.equipment.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
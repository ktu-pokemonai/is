@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-user"></i>
        Registrations
    </h1>

    <table class="table">
        <thead>
            <tr>
                <th>Apartment</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone no.</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->apartment->nr or 'Any' }}</td>
                <td>{{ $registration->first_name . ' ' . $registration->last_name }}</td>
                <td>{{ HTML::mailto($registration->email) }}</td>
                <td>{{ $registration->phone }}</td>
                <td>@include('admin.registrations.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
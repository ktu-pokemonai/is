@extends('manager.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-user"></i>
    Guests
    {{ button(route('manager.guests.create'), 'Register guest', 'btn btn-success', 'fa fa-btn fa-plus') }}
</h1>
@stop

@section('content')
    @include('delete-form')
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Apartment</th>
                <th>First name</th>
                <th>Last name</th>
                <th>ID nr.</th>
                <th>Last update</th>
                <th>Adctions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($guests as $guest)
            <tr>
                <td>{{ $guest->user->name() }}</td>
                <td>{{ $guest->user->apartment->nr }}</td>
                <td>{{ $guest->first_name }}</td>
                <td>{{ $guest->last_name }}</td>
                <td>{{ $guest->id_nr }}</td>
                <td>{{ $guest->updated_at->format('Y-m-d H:i:s') }}</td>
                <td>@include('manager.guests.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
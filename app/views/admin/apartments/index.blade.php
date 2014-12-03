@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-building"></i>
        Apartments
        {{ button(route('admin.apartments.create'), 'Add apartment', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    {{ Form::open(['method' => 'delete', 'class' => 'hidden', 'id' => 'delete-apartment']) }}
    {{ Form::close() }}

    <table class="table">
        <thead>
            <tr>
                <th>Apartment number</th>
                <th>Users / Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($apartments as $apartment)
            <tr>
                <td>{{{ $apartment->nr }}}</td>
                <td>{{ $apartment->users->count() . ' / ' . $apartment->capacity }}</td>
                <td>@include('admin.apartments.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
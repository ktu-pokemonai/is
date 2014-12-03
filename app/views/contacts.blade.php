@extends('layout.master')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-user"></i>
        Contacts
    </h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <td>Name</td>
                <td>Position</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                <td>{{ $contact->position }}</td>
                <td>{{ $contact->email ? HTML::mailto($contact->email) : '' }}</td>
                <td>{{ $contact->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
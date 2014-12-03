@extends('layout.master')

@section('menu')
    {{ nav(route('manager.index'), 'Home', 'fa fa-btn fa-home') }}
    {{ nav(route('manager.guests.index'), 'Guests', 'fa fa-btn fa-user') }}
    {{ nav(route('manager.trash.index'), 'Trash', 'fa fa-btn fa-trash-o') }}
    {{ nav(route('manager.complaints.index'), 'Complaints', 'fa fa-btn fa-warning') }}
    {{ nav(route('manager.keys.index'), 'Keys', 'fa fa-btn fa-key') }}
@stop
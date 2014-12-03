@extends('layout.master')

@section('menu')
    {{ nav(route('user.index'), 'Home', 'fa fa-btn fa-home') }}
    {{ nav(route('user.complaints.index'), 'Complaints', 'fa fa-btn fa-warning') }}
    {{ nav(route('user.messages.index'), 'Messages', 'fa fa-btn fa-envelope-o') }}
    {{ nav(route('user.equipment.index'), 'Equipment', 'fa fa-btn fa-desktop') }}
@stop
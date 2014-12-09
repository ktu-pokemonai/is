@extends('user.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-desktop"></i>
    {{ $equipment->name }}
</h1>
@stop

@section('content')
    {{ $calendar }}
@stop
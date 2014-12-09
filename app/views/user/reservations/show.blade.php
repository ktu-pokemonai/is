@extends('user.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-desktop"></i>
    {{ $equipment->name }} {{ Input::get('date') }}
</h1>
@stop

@section('content')
    {{ Form::open(['route' => ['user.equipment.update', $equipment->id], 'method' => 'patch']) }}

    {{ Form::hidden('date', Input::get('date')) }}
    @foreach($day as $time => $item)
        @if($item == 'taken')
            <span class="btn btn-warning disabled btn-block">
                {{ min_to_time($time) }} - {{ min_to_time($time + $equipment->duration) }}
            </span>
        @elseif($item == 'me')
                    <span class="btn btn-success disabled btn-block">
                        {{ min_to_time($time) }} - {{ min_to_time($time + $equipment->duration) }}
                    </span>
        @elseif($item == 'open')
            <button class="btn btn-primary btn-block" type="submit" name="time" value="{{ $time }}">
                {{ min_to_time($time) }} - {{ min_to_time($time + $equipment->duration) }}
            </button>
        @else
            <span class="btn btn-default disabled btn-block">
                {{ min_to_time($time) }} - {{ min_to_time($time + $equipment->duration) }}
            </span>
        @endif
    @endforeach

    {{ Form::close() }}
@stop
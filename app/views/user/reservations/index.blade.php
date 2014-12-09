@extends('user.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-desktop"></i>
    Equipment reservation
</h1>
@stop

@section('content')
    @foreach($rooms->chunk(3) as $row)
        <div class="row">
        @foreach($row as $room)
            <div class="col-md-4">
                <h2>{{{ $room->name }}}</h2>
                <div class="list-group">
                @foreach($room->equipment as $item)
                    <a class="list-group-item" href="{{ route('user.equipment.show', [$item->id]) }}">{{{ $item->name }}}</a>
                @endforeach
                </div>
            </div>
        @endforeach
        </div>
    @endforeach
@stop
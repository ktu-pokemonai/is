@extends('user.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa da-warning"></i>
        Complaints
        {{ button(route('user.complaints.create'), 'Register complaint', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    @foreach($complaints->chunk(3) as $row)
        <div class="row">
            @foreach($row as $complaint)
                <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>{{ nl2br(e($complaint->text)) }}</p>
                        <small>{{ $complaint->updated_at }}</small>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@stop
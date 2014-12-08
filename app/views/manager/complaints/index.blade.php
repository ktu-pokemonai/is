@extends('manager.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-warning"></i>
    Complaints
</h1>
@stop

@section('content')
    @foreach($complaints->chunk(3) as $row)
        <div class="row">
            @foreach($row as $complaint)
                <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        {{ $complaint->user->username }}
                        <div class="pull-right">
                        <span class="badge">{{ $complaint->responses->count() }}</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="panel-body">
                        <div class="text-right">
                            <small>{{ $complaint->updated_at }}</small>
                        </div>
                        <p>
                        {{ nl2br(e($complaint->text)) }}
                        </p>
                        <div class="text-center">
                            {{ button(route('manager.complaints.show', [$complaint->id]), 'Respond', 'btn btn-primary', 'fa fa-btn fa-mail-reply') }}
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@stop
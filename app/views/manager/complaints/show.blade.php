@extends('manager.layout')

@section('stop')
<h1 class="page-header">
    <i class="fa fa-warning"></i>
    Complaint by {{ $complaint->user->username }}
</h1>
@stop

@section('content')
    <div class="well">
        <p>{{ nl2br(e($complaint->text)) }}</p>
        <small>Last update: {{ $complaint->updated_at }}</small>
        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-mail-reply"></i>
                Respond
              </div>
              <div class="panel-body">
                {{ Form::open(['route' => ['manager.complaints.update', $complaint->id], 'method' => 'put']) }}
                    <div class="form-group">
                        {{ Form::label('text', 'Response', ['class' => 'control-label']) }}
                        {{ Form::textarea('text', null, ['class' => 'form-control']) }}
                    </div>

                    @include('manager.actions', ['back' => route('manager.complaints.index')])
                {{ Form::close() }}
              </div>
            </div>
        </div>
    </div>

    <h2>Responses <span class="badge">{{ $responses->count() }}</span></h2>
    @foreach($responses as $response)
        <div>
            <h3>{{ $response->user->username }}</h3>
            <p>{{ nl2br(e($response->text)) }}</p>
            <small>{{ $response->updated_at }}</small>
        </div>
    @endforeach
@stop
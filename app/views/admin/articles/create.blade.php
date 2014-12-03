@extends('admin.layout')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-newspaper-o"></i>
            Create article
          </div>
          <div class="panel-body">
            {{ Form::open(['route' => 'admin.articles.store', 'method' => 'post']) }}
                @include('admin.articles.form')
            {{ Form::close() }}
          </div>
        </div>
    </div>
@stop
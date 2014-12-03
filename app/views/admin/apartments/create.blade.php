@extends('admin.layout')

@section('content')
    <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <i class="fa fa-building"></i>
                    Add apartment
                  </div>
                  <div class="panel-body">
                    {{ Form::open(['route' => 'admin.apartments.store', 'method' => 'post']) }}
                        @include('admin.apartments.form')
                    {{ Form::close() }}
                  </div>
                </div>
            </div>
@stop
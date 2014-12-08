@extends('admin.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-picture-o"></i>
    Gallery
    {{ button(route('admin.images.create'), 'Upload image', 'btn btn-success', 'fa fa-btn fa-plus') }}
</h1>
@stop

@section('content')
    @include('delete-form')

    @foreach($images->chunk(4) as $row)
        <div class="row">
        @foreach($row as $image)
            <div class="col-md-3">
                <div class="thumbnail">
                  {{ HTML::image(route('gallery.show', [$image->id])) }}
                  <div class="caption">
                    <p>{{ nl2br(e($image->description)) }}</p>
                    <p>@include('admin.images.actions') </p>
                  </div>
                </div>
            </div>
        @endforeach
        </div>
    @endforeach
@stop
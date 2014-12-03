@extends('layout.master')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-picture-o"></i>
        Gallery
    </h1>

    @foreach($images->chunk(4) as $row)
        <div class="row">
        @foreach($row as $image)
            <div class="col-md-3">
                <div class="thumbnail">
                  <a href="{{ route('gallery.show', [$image->id]) }}" target="_blank">
                    {{ HTML::image(route('gallery.show', [$image->id])) }}
                  </a>
                  <div class="caption">
                    <p>{{ nl2br(e($image->description)) }}</p>
                  </div>
                </div>
            </div>
        @endforeach
        </div>
    @endforeach
@stop
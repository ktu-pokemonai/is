@extends('layout.master')

@section('header')
    <h1 class="page-header">
        <i class="fa fa-newspaper-o"></i>
        Articles
    </h1>
@stop

@section('content')
    <div class="list-group">
    @foreach($articles as $article)
        <a class="list-group-item" href="{{ route('article', [$article->id]) }}">
            <h4 class="list-group-item-heading">{{{ $article->title }}}</h4>
            <p class="list-group-item-text">{{ nl2br(e($article->short_text)) }}</p>
        </a>
    @endforeach
    </div>
@stop
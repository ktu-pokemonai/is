@extends('layout.master')

@section('header')
<h1 class="page-header">
    <i class="fa fa-newspaper-o"></i>
    {{{ $article->title }}}
</h1>
@stop

@section('content')
    <small>{{ sprintf('Published on: %s', $article->published_on) }}</small>

    <p class="lead">{{ nl2br(e($article->short_text)) }}</p>
    <p>{{ nl2br(e($article->long_text)) }}</p>
@stop
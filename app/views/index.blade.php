@extends('layout.master')

@section('content')
    </div>
    <div class="jumbotron">
        <div class="container">
            <h1>KTU dormitory IS</h1>
            <p>Main info and everything else you would need</p>
        </div>
    </div>
    <div class="container">
        <h1 class="page-header">
            <i class="fa fa-newspaper-o"></i>
            Articles
        </h1>
        <div class="list-group">
        @foreach($articles as $article)
            <a class="list-group-item" href="{{ route('article', [$article->id]) }}">
                <h4 class="list-group-item-heading">{{{ $article->title }}}</h4>
                <p class="list-group-item-text">{{ nl2br(e($article->short_text)) }}</p>
            </a>
        @endforeach
    </div>
@stop
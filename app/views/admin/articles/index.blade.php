@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-newspaper-o"></i>
        Articles
        {{ button(route('admin.articles.create'), 'Create article', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    {{ Form::open(['method' => 'delete', 'class' => 'hidden', 'id' => 'remove-article']) }}
    {{ Form::close() }}

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Short text</th>
                <th class="col-sm-1 text-center">Published</th>
                <th class="col-sm-2 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{{ $article->title }}}</td>
                <td>{{{ $article->short_text }}}</td>
                <td class="text-center">
                    @if(is_null($article->published_on))
                        <span class="label label-danger">false</span>
                    @else
                        <span class="label label-success">true</span>
                    @endif
                </td>
                <td class="text-center">
                    @include('admin.articles.actions')
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
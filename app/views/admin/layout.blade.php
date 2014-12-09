@extends('layout.master')

@section('menu')
    {{ nav(route('home'), 'Home', 'fa fa-btn fa-home') }}
    <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-btn fa-user"></i>
                Users
                <span class="caret"></span>
                <ul class="dropdown-menu">
                    {{ nav(route('admin.penalties.index'), 'Penalties', 'fa fa-btn fa-thumbs-o-down') }}
                    {{ nav(route('admin.messages.index'), 'Messages', 'fa fa-btn fa-envelope-o') }}
                    {{ nav(route('admin.registrations.index'), 'Registrations', 'fa fa-btn fa-user') }}
                </ul>
            </a>
        </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-btn fa-globe"></i>
            Site
            <span class="caret"></span>
            <ul class="dropdown-menu">
                {{ nav(route('admin.articles.index'), 'Articles', 'fa fa-btn fa-newspaper-o') }}
                {{ nav(route('admin.images.index'), 'Gallery', 'fa fa-btn fa-picture-o') }}
            </ul>
        </a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-btn fa-building"></i>
            Building
            <span class="caret"></span>
            <ul class="dropdown-menu">
                {{ nav(route('admin.apartments.index'), 'Apartments', 'fa fa-btn fa-home') }}
                {{ nav(route('admin.rooms.index'), 'Rooms', 'fa fa-btn fa-building') }}
            </ul>
        </a>
    </li>
@stop
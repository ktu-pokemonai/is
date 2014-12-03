<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <ul class="nav navbar-nav">
            @section('menu')
                @include('layout.menu.master')
            @show
        </ul>

        <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
            {{ nav(route('auth.login'), 'Login', 'fa fa-btn fa-sign-in') }}
            {{ nav(route('register'), 'Register', 'fa fa-btn fa-user') }}
        @else
            {{ nav(route('auth.logout'), 'Logout', 'fa fa-btn fa-sign-out') }}
        @endif
        </ul>
    </div>
</div>
{{ nav(route('home'), 'Articles', 'fa fa-btn fa-newspaper-o') }}
{{ nav(route('gallery.index'), 'Gallery', 'fa fa-btn fa-picture-o') }}
{{ nav(route('contacts'), 'Contacts', 'fa fa-btn fa-user') }}
@if(Auth::guest())
    {{ nav(route('register'), 'Register', 'fa fa-btn fa-user') }}
@endif

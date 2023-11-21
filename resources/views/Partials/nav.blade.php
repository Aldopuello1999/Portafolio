<nav>
    <ul>
                                {{-- aqui va el nombre de la ruta = routeIs('home')                         --}}
        {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> --}}
        <li class="{{ SetAction('home')}}"><a href="{{ route('home') }}">@lang('Home')</a></li>
        <li class="{{ SetAction('about')}}"><a href="{{ route('about') }}">@lang('About')</a></li>
        <li class="{{ SetAction('contact')}}"><a href="{{ route('contact') }}">@lang('Contact')</a></li>
        <li class="{{ SetAction('projects.*')}}"><a href="{{ route('projects.index') }}">@lang('projects')</a></li>
    </ul>
</nav>

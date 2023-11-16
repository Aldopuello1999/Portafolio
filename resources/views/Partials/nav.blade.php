<nav>
    <ul>
                                {{-- aqui va el nombre de la ruta = routeIs('home')                         --}}
        {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> --}}
        <li class="{{ SetAction('home')}}"><a href="/">@lang('Home')</a></li>
        <li class="{{ SetAction('about')}}"><a href="/about">@lang('About')</a></li>
        <li class="{{ SetAction('contact')}}"><a href="/contact">@lang('Contact')</a></li>
        <li class="{{ SetAction('portafolio')}}"><a href="/portafolio">@lang('Portafolio')</a></li>
    </ul>
</nav>

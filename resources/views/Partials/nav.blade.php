<nav>
    <ul>
                                {{-- aqui va el nombre de la ruta = routeIs('home')                         --}}
        {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> --}}
        <li class="{{ SetAction('home')}}"><a href="/">Home</a></li>
        <li class="{{ SetAction('about')}}"><a href="/about">about</a></li>
        <li class="{{ SetAction('contact')}}"><a href="/contact">contact</a></li>
        <li class="{{ SetAction('portafolio')}}"><a href="/portafolio">portafolio</a></li>
    </ul>
</nav>

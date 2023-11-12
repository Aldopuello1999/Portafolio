@extends('layout.layout')


@section('title','Portafolio')


{{-- por parametro recibe el nombre de donde vamos a insertar esta seccion  video 13 --}}
@section('content')
    <h1>Portafolio</h1>

    <ul>
        {{-- para validar si existe la variable con el isset --}}

            @forelse($portafolio as $portafolioItem)
                <li>{{ $portafolioItem['title'] }}</li>
            @empty
                <li>No hay proyectos a Mostrar</li>
            @endforelse

    </ul>
@endsection




{{-- la variable loop contiene informacion muy util --}}
{{-- <li>{{ $portafolioItem['title'] }} <small>{{ $loop->first ? 'Es el primero ' : ''}}</small></li> --}}

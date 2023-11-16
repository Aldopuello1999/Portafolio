@extends('layout.layout')


@section('title','Contact')

{{-- por parametro recibe el nombre de donde vamos a insertar esta seccion  video 16--}}
@section('content')
    <h1>{{ __('Contact') }}</h1>

    <form method="POST" action="{{route('contact')}}">
        {{-- esto hace es agregar un campo oculto con el token del usuario y es el encargado de evitar ataques de sumplantacion de identidad, ataque xxs
         (siempre agregar esta directiva dentro de los formularios) --}}
        @csrf
        <input name="name" placeholder="Nombre..."  value="{{ old('name') }}"><br>
        {{-- { !! $errors->first('name', '<small>:message</small><br>') !! } --}}

        <input type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"><br>
        {{-- { !! $errors->first('email', '<small>:message</small><br>') !! } --}}

        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {{-- { !! $errors->first('subject', '<small>:message</small><br>') !! } --}}

        <textarea name="content" placeholder="Mensaje......" value="{{ old('subject') }}"></textarea><br>
        {{-- { !! $errors->first('content', '<small>:message</small><br>') !! } --}}

        <button>Enviar</button>
    </form>
@endsection


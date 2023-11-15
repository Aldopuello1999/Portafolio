@extends('layout.layout')


@section('title','Contact')

{{-- por parametro recibe el nombre de donde vamos a insertar esta seccion  --}}
@section('content')
    <h1>Contact</h1>
        @if ($errors->any())
           {{ $errors->first('name') }}
        @endif

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


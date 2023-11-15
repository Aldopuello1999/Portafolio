@extends('layout.layout')


@section('title','Contact')

{{-- por parametro recibe el nombre de donde vamos a insertar esta seccion  --}}
@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{route('contact')}}">
        {{-- esto hace es agregar un campo oculto con el token del usuario y es el encargado de evitar ataques de sumplantacion de identidad, ataque xxs
         (siempre agregar esta directiva dentro de los formularios) --}}
        @csrf
        <input name="name" placeholder="Nombre..."><br>
        <input type="email" name="email" placeholder="Correo Electronico"><br>
        <input name="subject" placeholder="Asunto..."><br>
        <textarea name="content" placeholder="Mensaje......"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection


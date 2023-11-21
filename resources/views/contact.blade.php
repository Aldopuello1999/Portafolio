@extends('layout.layout')


@section('title','Contact')

{{-- por parametro recibe el nombre de donde vamos a insertar esta seccion  video 18--}}
{{-- cuando se termine el curso y este completo el proyecto mirar este video para enviar los mensaje por produccion video 17--}}
@section('content')
    <h1>{{ __('Contact') }}</h1>

    <form method="POST" action="{{route('messages.store')}}">
        {{-- esto hace es agregar un campo oculto con el token del usuario y es el encargado de evitar ataques de sumplantacion de identidad, ataque xxs
         (siempre agregar esta directiva dentro de los formularios) --}}
        @csrf
        <input name="name" placeholder="Nombre..."  value="{{ old('name') }}"><br>
        {{  $errors->first('name', ':message')  }}
        <br>
        <input type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"><br>
        {{  $errors->first('email', ':message') }}
        <br>
        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {{  $errors->first('subject', ':message')  }}
        <br>
        <textarea name="content" placeholder="Mensaje......" value="{{ old('content') }}"></textarea><br>
        {{  $errors->first('content', ':message')  }}
        <br>
        <button>Enviar</button>
    </form>
@endsection


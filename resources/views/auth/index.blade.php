@extends('auth.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administrador</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('auth.create')}}"> Crear nuevo evento</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Descripción</th>
        <th width="280px">Acciones</th>
    </tr>
    @foreach ($events as $event)
    <tr>
        <td>{{ $event->id }}</td>
        <td>{{ $event->titulo }}</td>
        <td>{{ $event->descripcion }}</td>
        <td>
            <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('events.show', $event->id) }}">Ver</a>

                <a class="btn btn-primary" href="#">Editar</a>

                @csrf

                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
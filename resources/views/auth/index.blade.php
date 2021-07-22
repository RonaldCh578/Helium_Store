@extends('auth.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administrador</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('auth.create')}}" onclick="resetNFechas()"> Crear nuevo evento</a>
 
            <a class="btn btn-secondary" href="{{route('auth.no_disponibles')}}" > Ver eventos no disponibles</a>
           
            <a class="btn btn-secondary" href="{{route('auth.index')}}" > Ver eventos disponibles</a>
  
            
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

                <a class="btn btn-primary" href="{{ route('events.editEvent', $event->id) }}" onclick="resetNFechas()">Editar</a>

                @csrf
                @if($event->disponible == 1)
                
                <button type="submit" class="btn btn-primary">Quitar </button>

                @endif
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
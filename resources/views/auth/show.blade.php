@extends('auth.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Información de Evento</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('auth.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Título:</strong>
            {{ $event[0]->titulo }}
        </div>
        <div class="form-group">
            <strong>Categoria:</strong>
            {{ $event[0]->categoria }}
        </div>
        <div class="form-group">
            <strong>Descripción:</strong>
            {{ $event[0]->descripcion }}
        </div>
        <div class="form-group">
            <strong>Lugar:</strong>
            {{ $event[0]->lugar }}
        </div>
        <div class="form-group">
            <strong>Precio:</strong>
            {{ $event[0]->precio }}
        </div>
        <div class="form-group">
            <strong>Tipo de público:</strong>
            {{ $event[0]->tipo_publico }}
        </div>
        <div class="form-group">
            <strong>Disponibilidad:</strong>
            {{ $event[0]->disponible }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Portada:</strong>
            <img id="preview" src="{{ asset('storage/img/'.$event[0]->img) }}" alt="preview image" style="height:250px">
        </div>
    </div>
</div>
@endsection
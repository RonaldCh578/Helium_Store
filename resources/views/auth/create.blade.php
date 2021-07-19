@extends('auth.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar Nuevo Evento</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('auth.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorías:</strong>
                <select name="categoria">
                    <option value="Conciertos">Conciertos</option>
                    <option value="Infantiles">Infantiles</option>
                    <option value="Familiares">Familiares</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Festivales">Festivales</option>
                    <option value="Teatro y cultura">Teatro y cultura</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de público:</strong>
                <select name="tipo_publico">
                    <option value="Todo público">Todo público</option>
                    <option value="Adultos">Adultos</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disponibilidad:</strong>
                <select name="disponible">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                <input type="text" name="titulo" class="form-control" placeholder="Título">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lugar:</strong>
                <input type="text" name="lugar" class="form-control" placeholder="Lugar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="number" min="0" step="1" name="precio" class="form-control" placeholder="Precio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Portada:</strong>
                <input id="image" type="file" name="img" class="form-control">
                <img id="preview" src="{{url('/img/preview.png')}}" alt="preview image" style="height:250px">
            </div>
        </div>

        <hr>
        <h3>Fechas</h3>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="date" name="fecha" id="fecha">
                <input type="time" name="hora" id="hora">
                <input type="number" min="0" step="1" name="cantidad_tickets" class="form-control" placeholder="cantidad_tickets">
            </div>
        </div>





        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        let image = document.getElementById('image');
        if (image != null) {
            image.addEventListener("change", function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    let preview = document.getElementById('preview');
                    preview.setAttribute("src", e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        }

    });
</script>
@endsection
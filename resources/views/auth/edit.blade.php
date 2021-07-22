
@extends('auth.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Evento</h2>
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

<form action="{{ route('events.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorías:</strong>
                <select name="categoria">
                    @switch($event[0]->categoria)
                        @case('Conciertos')
                            <option value="Conciertos" selected>Conciertos</option>
                            <option value="Infantiles">Infantiles</option>
                            <option value="Familiares">Familiares</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Festivales">Festivales</option>
                            <option value="Teatro y cultura">Teatro y cultura</option>
                        @break
                        
                        @case('Infantiles')
                            <option value="Conciertos" >Conciertos</option>
                            <option value="Infantiles" selected>Infantiles</option>
                            <option value="Familiares">Familiares</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Festivales">Festivales</option>
                            <option value="Teatro y cultura">Teatro y cultura</option>
                        @break

                        @case('Familiares')
                            <option value="Conciertos" >Conciertos</option>
                            <option value="Infantiles">Infantiles</option>
                            <option value="Familiares" selected>Familiares</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Festivales">Festivales</option>
                            <option value="Teatro y cultura">Teatro y cultura</option>
                        @break

                        @case('Deportes')
                            <option value="Conciertos" >Conciertos</option>
                            <option value="Infantiles">Infantiles</option>
                            <option value="Familiares">Familiares</option>
                            <option value="Deportes" selected>Deportes</option>
                            <option value="Festivales">Festivales</option>
                            <option value="Teatro y cultura">Teatro y cultura</option>
                        @break

                        @case('Festivales')
                            <option value="Conciertos" >Conciertos</option>
                            <option value="Infantiles">Infantiles</option>
                            <option value="Familiares">Familiares</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Festivales" selected>Festivales</option>
                            <option value="Teatro y cultura">Teatro y cultura</option>
                        @break

                        @case('Teatro y cultura')
                            <option value="Conciertos" >Conciertos</option>
                            <option value="Infantiles">Infantiles</option>
                            <option value="Familiares">Familiares</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Festivales">Festivales</option>
                            <option value="Teatro y cultura" selected>Teatro y cultura</option>
                        @break
                        
                    @endswitch
                    
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de público:</strong>
                <select name="tipo_publico">
                @switch($event[0]->tipo_publico)
                    @case('Todo público')
                        <option value="Todo público" selected>Todo público</option>
                        <option value="Adultos">Adultos</option>
                    @break
                    
                    @case('Adultos')
                        <option value="Todo público">Todo público</option>
                        <option value="Adultos" selected>Adultos</option>
                    @break

                @endswitch
                    
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disponibilidad:</strong>
                <select name="disponible">
                @switch($event[0]->disponible)
                    @case(0)
                    <option value="1">Disponible</option>
                    <option value="0" selected>No disponible</option>
                    @break
                    
                    @case(1)
                    <option value="1" selected>Disponible</option>
                    <option value="0">No disponible</option>
                    @break

                @endswitch
                    
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                <input type="text" name="titulo" value="{{$event[0]->titulo}}" class="form-control" placeholder="Título">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lugar:</strong>
                <input type="text" name="lugar" value="{{$event[0]->lugar}}"class="form-control" placeholder="Lugar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="number" min="0" step="1" name="precio" value="{{$event[0]->precio}}" class="form-control" placeholder="Precio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción">{{$event[0]->descripcion}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Portada:</strong>
                <input id="image" type="file" name="img" class="form-control">
                <img id="preview" src="{{asset('storage/img/'.$event[0]->img)}}" alt="preview image" style="height:250px">
            </div>
        </div>

        <hr>
        <?php
            $length = count($dates);
        ?>
        <h3>Fechas</h3>
        <a class="btn btn-primary"   onclick="checkDates({{$length-1}})">Agregar fecha</a>
        <div id="fechasContainer" class="col-xs-12 col-sm-12 col-md-12 ">
                
            @for ($i = 0; $i < $length ; $i++)
                 <?php
                    $fecha = preg_split("/[:|\s-]/", $dates[$i]->fecha_hora);
                    $ano = $fecha[0];
                    $mes = $fecha[1];
                    $diaNum = $fecha[2];
                    $hora = $fecha[3];
                    $min = $fecha[4];
                ?>
                <div class="form-group">
                    <input type="date" name="fecha{{$i}}" value="{{$ano.'-'.$mes.'-'.$diaNum}}" id="fecha{{$i}}">
                    <input type="time" name="hora{{$i}}" value="{{$hora.':'.$min}}" id="hora{{$i}}">
                    <input type="number" min="0" step="1" name="cantidad_tickets{{$i}}" value="{{$dates[$i]->cantidad_tickets}}" class="form-control" placeholder="cantidad tickets">
                </div>
            @endfor
            
        </div>
    <input type="hidden" name="id_evento" id="id_evento" value="{{$event[0]->id}}">

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
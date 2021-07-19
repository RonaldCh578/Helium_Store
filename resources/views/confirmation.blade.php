@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8">

        <div class="row">
            <div class="col-sm">
                @if($errorCupos)
                <h1 class="middle_h1 after">Lo sentimos</h1>
                @else
                <h1 class="middle_h1 after">Su compra se ha procesado con éxito</h1>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                @if($errorCupos)
                <h2>No hay cupos disponibles :(</h2>
                @else
                <h2>Resumen</h2>
                <div class="confirmation_detail">
                    <div class="row">

                        <div class="col-12">
                            <h2>{{$event[0]->titulo}}</h2>
                        </div>
                        <div class="col-6 ">
                            <p class="text-start">{{$event[0]->lugar}}</p>
                        </div>
                        <div class="col-6 ">
                            <p class="text-start">{{$event[0]->categoria}}</p>
                        </div>
                        <div class="col-6 ">
                            <?php
                            $fecha = preg_split("/[:|\s-]/", $date[0]->fecha_hora);
                            $ano = $fecha[0];
                            $mes = $fecha[1];
                            $diaNum = $fecha[2];
                            $hora = $fecha[3];
                            $min = $fecha[4];
                            ?>

                            <p class="text-start"><?php echo $diaNum . "/" . $mes . "/" . $ano ?></p>
                        </div>
                        <div class="col-6 ">
                            <p class="text-start"><?php echo $hora . ":" . $min ?></p>
                        </div>
                        <div class="col-12">
                            <h3>Facturación</h3>
                        </div>
                        <div class="col-12 ">
                            <p class="text-start">{{$data['name']}} {{$data['last_name']}}</p>
                        </div>
                        <div class="col-12 ">
                            <p class="text-start">{{$data['email']}}</p>
                        </div>
                        <div class="col-12 ">
                            <h3>Entradas reservadas</h3>
                        </div>
                        <div class="col-6 text-center">
                            <p>Adulto: {{$data['adults']}}</p>
                        </div>
                        <div class="col-6">
                            <p>₡ {{$data['adults'] * $event[0]->precio}}</p>
                        </div>

                        @if(!empty($data["children"]))

                        <div class="col-6 text-center">
                            <p>Niño: {{$data['children']}}</p>
                        </div>
                        <div class="col-6">
                            <p>₡ {{$data['children'] * $event[0]->precio}}</p>
                        </div>

                        @endif

                        <div class="registrarse-line margin-bottom-0"></div>

                        <div class="col-6 text-center">
                            <p class="fw-bold">Total</p>
                        </div>
                        <div class="col-6 text-center">
                            @if(!empty($data["children"]))
                            <p class="fw-bold">₡ {{($data['adults'] * $event[0]->precio) + ($data['children'] * $event[0]->precio)}}</p>
                            @else
                            <p class="fw-bold">₡ {{$data['adults'] * $event[0]->precio}}</p>
                            @endif
                        </div>

                    </div>

                </div>
                @endif
            </div>
        </div>

        <div class="row">
            @if(!$errorCupos)
            <a class="btn_backHome_confirmation" onclick="print()">imprimir</a>
            @endif
            <a class="btn_backHome_confirmation" href="/">Volver a inicio</a>
        </div>
    </div>
</div>

@endsection
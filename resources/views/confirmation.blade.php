@extends('layout')
  
@section('content')

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">

            <div class="row">
                <div class="col-sm">
                    <h1 class="middle_h1 after">Si compra se ha procesado con éxito</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <h2>Resumen</h2>
                    <div class="confirmation_detail">
                        <div class="row">

                            <div class="col-12">
                                <h2>Nombre Evento</h2>
                            </div>
                            <div class="col-6 ">
                                <p class="text-start">Ubicación</p>
                            </div>
                            <div class="col-6 ">
                                <p class="text-start">Categoría</p>
                            </div>
                            <div class="col-6 ">
                                <p class="text-start">Fecha</p>
                            </div>
                            <div class="col-6 ">
                                <p class="text-start">Hora</p>
                            </div>
                            <div class="col-12">
                                <h3>Facturación</h3>
                            </div>
                            <div class="col-12 ">
                                <p class="text-start">Nombre completo</p>
                            </div>
                            <div class="col-12 ">
                                <p class="text-start">Correo electrónico</p>
                            </div>
                            <div class="col-12 ">
                                <h3>Entradas reservadas</h3>
                            </div>
                            <div class="col-6 text-center">
                                <p>Adulto: 1</p>
                            </div>
                            <div class="col-6">
                                <p>$100</p>
                            </div>
                            <div class="col-6 text-center">
                                <p>Menor: 2</p>
                            </div>
                            <div class="col-6">
                                <p>$100</p>
                            </div>

                            <div class="registrarse-line margin-bottom-0"></div>

                            <div class="col-6 text-center">
                                <p class="fw-bold">Total</p>
                            </div>
                            <div class="col-6 text-center">
                                <p class="fw-bold">$200</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <a class="btn_backHome_confirmation" href="/">Volver a inicio</a>
            </div>
        </div>
    </div>

@endsection
@extends('layout')
  
@section('content')

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">
                <div class="col-sm">
                    <h1 class="middle_h1 after">Información de compra</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <form action="/confirmation" method="GET">

                <div class="row">
                    <div class="col-sm">
                        <h2>Datos personales</h2>
                    </div>
                </div>

                <div class="row pay_contact">
                    <div class="col-sm-6">
                        <Label for="name">Nombre</Label>
                        <input type="text" id="name" placeholder="Sharon" name="name">
                    </div>

                    <div class="col-sm-6">
                        <Label for="last_name">Apellidos</Label>
                        <input type="text" id="last_name" placeholder="López Bonilla" name="last_name">
                    </div>

                    <div class="col-sm-6">
                        <Label for="email">Correo eletrónico</Label>
                        <input type="text" id="email" placeholder="sharonlopez@mail.com" name="email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <h2>Datos de la tarjeta</h2>
                    </div>
                </div>

                <div class="row pay_contact">
                    <div class="col-sm-6">
                        <Label for="card_number">Número de la tarjeta</Label>
                        <input type="text" id="card_number" placeholder="1234 5678 9101 1121"
                            name="card_number">
                    </div>

                    <div class="col-sm-6">
                        <Label for="expire_date">Fecha de vencimiento</Label>
                        <input type="text" id="expire_date" placeholder="MM/YY" name="expire_date">

                    </div>

                    <div class="col-sm-6">
                        <Label for="secure_code">CVC/CVV</Label>
                        <input type="text" id="secure_code" placeholder="123" name="secure_code">
                    </div>
                </div>

                <div class="row pay_contact">
                    <button type="submit">Finalizar</button>
                </div>

            </form>

        </div>
    </div>

@endsection
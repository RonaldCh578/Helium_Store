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
        <form action="/confirmation" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-sm">
                    <h2>Datos personales</h2>
                </div>
            </div>

            <div class="row pay_contact">
                <div class="col-sm-6">
                    <Label for="name">Nombre *</Label>
                    <input type="text" id="name" placeholder="Sharon" name="name" onblur="activateConfirmBtn()">
                </div>

                <div class="col-sm-6">
                    <Label for="last_name">Apellidos *</Label>
                    <input type="text" id="last_name" placeholder="López Bonilla" name="last_name" onblur="activateConfirmBtn()">
                </div>

                <div class="col-sm-6">
                    <Label for="email">Correo eletrónico *</Label>
                    <input type="email" id="email" placeholder="sharonlopez@mail.com" name="email" onblur="activateConfirmBtn()">
                </div>
            </div>
            <input type="hidden" value="{{$data['evento']}}" name="evento">
            <input type="hidden" value="{{$data['fecha']}}" name="fecha">
            <input type="hidden" value="{{$data['adults']}}" name="adults" id="adults">

            @if(!empty($data["children"]))
            <input type="hidden" value="{{$data['children']}}" name="children" id="children">
            @endif

            <div class="row pay_contact">
                <button type="submit" id="confirm_btn" disabled>Finalizar</button>
            </div>

        </form>

    </div>
</div>

@endsection
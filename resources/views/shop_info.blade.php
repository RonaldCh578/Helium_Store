@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8">
        <div class="row">
            <div class="col-sm">
                <h1 class="middle_h1 after">Compra de entradas</h1>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8">
        <div class="row">
            <div class="col-sm">
                <p class="subtitle_shop_info">Campos disponibles: <span id="tickets_totales">{{ $showShopInfo[0]->cantidad_tickets}}</span></p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8 shop_info">
        <form action="pay_info" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-sm">

                    <label class="subtitle_shop_info" for="qty_tickets_adults">Adultos</label>
                    <span>
                        <button class="minus_border_radius" id="minus_adult" aria-label="minus button" onclick="decrementBtn('minus_adult')" type="button"><i class="fas fa-minus"></i></button>
                        <input name="adults" title="Quatity of adults" id="qty_tickets_adults" value="0" min="0" type="text" readonly="readonly">
                        <button class="plus_border_radius" id="plus_adult" aria-label="plus button" onclick="incrementBtn('plus_adult')" type="button"><i class="fas fa-plus"></i></button>
                    </span>

                </div>
            </div>
            @if($eventDate[0]->tipo_publico == "Todo público")

            <div class="row">
                <div class="col-sm">

                    <label class="subtitle_shop_info" for="qty_tickets_children">Niños</label>
                    <span>
                        <button class="minus_border_radius" id="minus_children" aria-label="minus button" onclick="decrementBtn('minus_children')" type="button"><i class="fas fa-minus"></i></button>
                        <input name="children" title="Quatity of children" id="qty_tickets_children" value="0" min="0" type="text" readonly="readonly">
                        <button class="plus_border_radius" id="plus_children" aria-label="plus button" onclick="incrementBtn('plus_children')" type="button"><i class="fas fa-plus"></i></button>
                    </span>

                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-sm">

                    <h2>Detalle de compra</h2>
                    <div class="shop_detail">

                        <div class="row">
                            <div class="col">
                                <p>Título</p>
                            </div>
                            <div class="col">
                                <p>Precio unitario</p>
                            </div>
                            <div class="col">
                                <p>Subtotal</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p id="qty_adults">0 Adulto</p>
                            </div>
                            <div class="col">
                                <p>₡ <span id="precio_adults" class="spanPrice">{{$eventDate[0]->precio}}</span></p>
                            </div>
                            <div class="col">
                                <p>₡ <span id="subtotal_adults" class="spanPrice">0</span></p>
                            </div>
                        </div>
                        @if($eventDate[0]->tipo_publico == "Todo público")
                        <div class="row">
                            <div class="col">
                                <p id="qty_children">0 Niño</p>
                            </div>
                            <div class="col">
                                <p>₡ <span id="precio_children" class="spanPrice">{{$eventDate[0]->precio}}</span></p>
                            </div>
                            <div class="col">
                                <p>₡ <span id="subtotal_children" class="spanPrice">0</span></p>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <p class="total_shop_info">Total: ₡ <span id="total" class="spanPrice">0</span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <input type="hidden" value="{{$eventDate[0]->id}}" name="evento">
            <input type="hidden" value="{{$showShopInfo[0]->id}}" name="fecha">

            <div class="row">
                <div class="col-sm">
                    <button id="btn_continue_shoping" aria-label="continue button" type="submit" disabled>Continuar</button>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection
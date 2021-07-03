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
                    <p class="subtitle_shop_info">Campos disponibles: 19</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8 shop_info">
            <form action="/information" method="get">

                <div class="row">
                    <div class="col-sm">

                        <label class="subtitle_shop_info" for="qty_tickets_adults">Adultos</label>
                        <span>
                            <button class="minus_border_radius" aria-label="minus button" type="button"><i
                                    class="fas fa-minus"></i></button>
                            <input name="qty_ticket" title="Quatity of adults" id="qty_tickets_adults" value="0" min="0"
                                type="text">
                            <button class="plus_border_radius" aria-label="plus button" type="button"><i class="fas fa-plus"></i></button>
                        </span>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">

                        <label class="subtitle_shop_info" for="qty_tickets_children">Niños</label>
                        <span>
                            <button class="minus_border_radius" aria-label="minus button" type="button"><i
                                    class="fas fa-minus"></i></button>
                            <input name="qty_tickets_children" title="Quatity of children" id="qty_tickets_children" value="0" min="0"
                                type="text">
                            <button class="plus_border_radius" aria-label="plus button" type="button"><i class="fas fa-plus"></i></button>
                        </span>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">

                        <h2>Detalle de compra</h2>
                        <div class="shop_detail">

                            <div class="row">
                                <div class="col">
                                    <p>Título</p>
                                </div>
                                <div class="col">
                                    <p>Precio</p>
                                </div>
                                <div class="col">
                                    <p>Subtotal</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p>1 Adulto</p>
                                </div>
                                <div class="col">
                                    <p>0</p>
                                </div>
                                <div class="col">
                                    <p>0</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="total_shop_info">Total: ₡0</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <button id="btn_continue_shoping" aria-label="continue button" type="submit">Continuar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
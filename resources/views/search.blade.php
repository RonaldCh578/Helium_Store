@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8">
        <div class="row">
            <div class="col-sm">
                <h1 class="category_title after">Resultado de: {{ $key }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col col-sm-11 col-md-10 col-lg-8">
        <div class="row">

            <?php
            $length = count($result);
            ?>

            @for ($i = 0; $i < $length; $i++)
            <div class="col-sm-4">
                <div class="card category_card">
                    <img src="{{ asset('storage/img/'.$result[$i]->img) }}" class="card-img-top category-card-img" alt="{{ $result[$i]->titulo }}">
                    <div class="card-body">
                        <h2 class="card-title card_overflow">{{ $result[$i]->titulo }}</h2>

                        @if($result[$i]->precio == 0)
                            <h3 class="card-text">Gratis</h3>
                        @else
                            <h3 class="card-text">₡{{ $result[$i]->precio }}</h3>
                        @endif
                        
                        <p class="card-text card_overflow">{{ $result[$i]->lugar }} <br /> {{ $result[$i]->categoria }}</p>

                        <a href="/event_detail/{{ $result[$i]->id }}" aria-label="Enter to event"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor

        </div>

        <div class="row">
            <button class="btn_backHome_confirmation">Ver más</button>
        </div>

    </div>
</div>

@endsection
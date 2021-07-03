@extends('layout')
  
@section('content')

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">
                <div class="col-sm">
                    <h1 class="category_title after">{{ $categoria }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">

            <?php 
                $length = count($eventsSelected);
                $length = $length - 2;
            ?>

            @for ($i = $length + 1; $i >= 0; $i--)
                <div class="col-sm-4">
                    <div class="card category_card">
                        <img src="../img/{{ $eventsSelected[$i]->img }}" class="card-img-top category-card-img" alt="{{ $eventsSelected[$i]->titulo }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $eventsSelected[$i]->titulo }}</h2>

                            <h3 class="card-text">₡{{ $eventsSelected[$i]->precio }}</h3>

                            <p class="card-text">{{ $eventsSelected[$i]->lugar }} <br /> {{ $eventsSelected[$i]->categoria }}</p>

                            <a href="/event_detail/{{ $eventsSelected[$i]->id }}" aria-label="Enter to event"><i class="fas fa-arrow-right"></i></a>
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
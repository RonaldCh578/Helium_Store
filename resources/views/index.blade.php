@extends('layout')
  
@section('content')
    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">
                <div class="col-sm">
                    <h1>Entretenimiento para todos los gustos</h1>
                </div>
                <div class="col-sm search_bar">
                    <form action="">
                        <input placeholder="Buscar" name="search"
                            title="Ingrese una palabra clave para empezar a buscar" type="text" id="searchBar" aria-label="search bar">
                        <button type="submit" aria-label="search button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">
                <div class="col-sm">
                    <!--Start Carousel-->

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                                $length = count($events);
                                $length = $length - 2;
                            ?>

                            @foreach($events as $event)
                                @if($event->id == $length)
                                    <div class="carousel-item active">
                                        <a href="/event_detail/{{ $event->id }}">
                                            <img src="../img/{{ $event->img }}" class="d-block w-100 carousel_img" alt="{{ $event->titulo }}">
                                        </a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="carousel-title">{{ $event->titulo }}</h5>
                                        </div>
                                    </div>
                                @elseif($event->id > $length)
                                    <div class="carousel-item">
                                    <a href="/event_detail/{{ $event->id }}">
                                            <img src="../img/{{ $event->img }}" class="d-block w-100 carousel_img" alt="{{ $event->titulo }}">
                                        </a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="carousel-title">{{ $event->titulo }}</h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev carousel_control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon control_icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel_control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon control_icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!--End Carousel-->
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">
                <h2 class="after">Estrenos</h2>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">
            <div class="row">

                @for ($i = $length + 1; $i >= 0; $i--)
                    @if($i > $length - 5)
                        <div class="col-sm-4">
                            <div class="card premiere_section">
                                <img src="../img/{{ $events[$i]->img }}" class="card-img-top card-event" alt="{{ $events[$i]->titulo }}">
                                <div class="card-body">
                                    <a href="/event_detail/{{ $events[$i]->id }}">Leer más</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor

            </div>
            <div class="row">
                <a class="btn_backHome_confirmation" href="/category/Todos los eventos">Ver más</a>
            </div>
        </div>
    </div>
@endsection
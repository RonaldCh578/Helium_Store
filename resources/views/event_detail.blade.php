@extends('layout')
  
@section('content')

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8 fit_to_border">
            <div class="event_back_cover">
                <img src="../img/{{ $eventDetail[0]->img }}" alt="Contra portada de concierto de música Pop">
                <div class="row align-items-center inner">
                    <img src="../img/{{ $eventDetail[0]->img }}" alt="Portada de concierto de música Pop">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-sm-11 col-md-10 col-lg-8">

            <div class="row">
                <div class="col-sm event_detail">

                    <h1>{{ $eventDetail[0]->titulo }}</h1>

                    <div class="row">
                        <div class="col p-0">
                            <h3 class="m-0">{{ $eventDetail[0]->lugar }}</h3>
                        </div>
                        <div class="col p-0">
                            <h2 class="m-0">₡{{ $eventDetail[0]->precio }}</h2>
                        </div>
                    </div>

                    <h3>{{ $eventDetail[0]->categoria }}</h3>
                    <h3>{{ $eventDetail[0]->tipo_publico }}</h3>

                    <p>{{ $eventDetail[0]->descripcion }}</p>
                </div>
            </div>

            <form action="/shop_info" method="get">

                <div class="row">

                    <div class="col col-sm-11 col-md-10 col-lg-8">

                        <div class="select_box">

                            <div class="selected">
                                Seleccione una fecha
                            </div>

                            <div class="options_container">

                                @foreach($eventDates as $eventDate)

                                    <?php
                                        $fecha = preg_split("/[:|\s-]/", $eventDate->fecha_hora);
                                        $ano = $fecha[0];
                                        $mes = $fecha[1];
                                        $diaNum = $fecha[2];
                                        $hora = $fecha[3];
                                        $min = $fecha[4];
                                    ?>

                                    <div class="option" onclick="changeSelected('lbl_schedule{{ $eventDate->id }}')">
                                        <input type="radio" id="schedule_{{ $eventDate->id }}" name="optionSchedule" value="1">
                                        <label for="schedule_{{ $eventDate->id }}" id="lbl_schedule{{ $eventDate->id }}"><?php echo $diaNum."/".$mes."/".$ano." - ".$hora.":".$min ?></label>
                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="submit_event_detail">
                            <button type="submit" aria-label="Buy tickets">Registrarse</button>
                        </div>

                    </div>

                </div>

            </form>

            <div class="row">
                <div class="col-sm">
                    <h2 class="after">Eventos relacionados</h2>
                </div>
            </div>

            <div class="row">

                <?php
                    $length = count($eventsSelected);
                    $length = $length - 2;
                ?>

                @for ($i = $length + 1; $i >= 0; $i--)
                    @if($i > $length - 5)
                        @if($eventsSelected[$i]->id != $eventDetail[0]->id)
                            <div class="col-sm-4">
                                <div class="card premiere_section">
                                    <img src="../img/{{ $eventsSelected[$i]->img }}" class="card-img-top card-event" alt="{{ $eventsSelected[$i]->titulo }}">
                                    <div class="card-body">
                                        <a href="/event_detail/{{ $eventsSelected[$i]->id }}">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endfor

                <div class="row">
                    <a class="btn_backHome_confirmation" href="/category#category">Ver más</a>
                </div>

            </div>

        </div>
    </div>

@endsection
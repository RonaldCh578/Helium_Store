<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataSearch = $request->all();
        $key = $dataSearch['search'];

        $result = DB::select('SELECT * FROM eventos WHERE titulo LIKE "%'.$dataSearch['search'].'%" OR categoria LIKE "%'.$dataSearch['search'].'%" OR descripcion LIKE "%'.$dataSearch['search'].'%"' );
        return view('search', compact('result', 'key'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'lugar' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'tipo_publico' => 'required',
            'descripcion' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disponible' => 'required',
            
        ]);

        //
        $data = $request->all();
        $file = $request->file('img');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'event-photo-' . time() . '.' . $file->getClientOriginalExtension();
        $data['img'] = $filename;

        // save to storage/app/public/imgs as the new $filename
        $path = $file->storeAs('public/img', $filename);
        //


        DB::table("eventos")->insert([
            'titulo' => $data['titulo'],
            'lugar' => $data['lugar'],
            'categoria' => $data['categoria'],
            'precio' => $data['precio'],
            'tipo_publico' => $data['tipo_publico'],
            'descripcion' => $data['descripcion'],
            'img' => $data['img'],
            'disponible' => $data['disponible']

        ]);


        $event = DB::select('SELECT * FROM eventos WHERE img = "' . $data['img'] . '"');
        $createDate = false;
        $i = 0;

        while (!$createDate) {
            if (!empty($data['cantidad_tickets'.$i])) {
                $request->validate([
                    'fecha'.$i => 'required',
                    'hora'.$i => 'required',
                    'cantidad_tickets'.$i => 'required',
                ]);

                $fecha_hora = $data['fecha'.$i] .' '. $data['hora'.$i];

                DB::table("fechas")->insert([
                    'fecha_hora' => $fecha_hora,
                    'cantidad_tickets' => $data['cantidad_tickets'.$i],
                    'id_evento' => $event[0]->id
        
                ]);
                $i++; 
            }else{
                $createDate = true; 
            }
        }
       

        return redirect("dashboard");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $event)
    {
        //
        $events = DB::select('SELECT * FROM eventos WHERE disponible = 1');
        return view('index', compact('events'));
    }

    public function showCategories($categoria)
    {
        //
        if ($categoria == "Todos los eventos") {
            $eventsSelected = DB::select('SELECT * FROM eventos WHERE disponible = 1');
        } else {
            $eventsSelected = DB::select('SELECT * FROM eventos WHERE categoria = "' . $categoria . '" AND disponible = 1');
        }
        return view('/category', compact('eventsSelected', 'categoria'));
    }

    public function showDetails($id)
    {
        //
        $eventDetail = DB::select('SELECT * FROM eventos WHERE disponible = 1 AND id = "' . $id . '"');
        $eventDates = DB::select('SELECT * FROM fechas WHERE id_evento = "' . $id . '"');
        $categoria = $eventDetail[0]->categoria;
        $eventsSelected = DB::select('SELECT * FROM eventos WHERE categoria = "' . $categoria . '" AND disponible = 1');
        return view('event_detail', compact('eventDetail', 'eventDates', 'eventsSelected'));
    }

    public function showShopInfo(Request $request)
    {

        $id = $request->choice;
        //
        $showShopInfo = DB::select('SELECT * FROM fechas WHERE id = "' . $id . '"');
        $eventDate = DB::select('SELECT * FROM eventos WHERE id = "' . $showShopInfo[0]->id_evento . '"');
        return view('shop_info', compact('showShopInfo', 'eventDate'));
    }

    public function sendData(Request $request)
    {
        $data = $request->all();



        return view('pay_contact_info', compact('data'));
    }

    public function sendDataConfirmation(Request $request)
    {
        $errorCupos = false;

        $data = $request->all();
        $event = DB::select('SELECT * FROM eventos WHERE id = "' . $data['evento'] . '"');
        $date = DB::select('SELECT * FROM fechas WHERE id = "' . $data['fecha'] . '"');

        if (!empty($data["children"])) {

            $totalTickets = $data['adults'] + $data['children'];

            if ($totalTickets <= $date[0]->cantidad_tickets) {
                $mytime = Carbon\Carbon::now();

                DB::table("usuario")->insert([
                    'nombre' => $data['name'],
                    'apellidos' => $data['last_name'],
                    'email' => $data['email']

                ]);

                $user = DB::select('SELECT * FROM usuario WHERE email = "' . $data['email'] . '" AND nombre = "' . $data['name'] . '" AND apellidos = "' . $data['last_name'] . '"');

                DB::table("registro")->insert([
                    'tickets_adultos' => $data['adults'],
                    'tickets_infantiles' => $data['children'],
                    'fecha_compra' => $mytime,
                    'id_evento' => $data['evento'],
                    'id_usuario' => $user[0]->id,
                    'id_fecha' => $data['fecha']

                ]);

                $cuposRestantes = $date[0]->cantidad_tickets - $data['adults'] - $data['children'];

                DB::table("fechas")
                    ->where('id', $data['fecha'])
                    ->update([
                        'cantidad_tickets' => $cuposRestantes

                    ]);

                $errorCupos = false;
            } else {
                $errorCupos = true;
            }
        } else {

            $totalTickets = $data['adults'];

            if ($totalTickets <= $date[0]->cantidad_tickets) {
                $mytime = Carbon\Carbon::now();

                DB::table("usuario")->insert([
                    'nombre' => $data['name'],
                    'apellidos' => $data['last_name'],
                    'email' => $data['email']

                ]);

                $user = DB::select('SELECT * FROM usuario WHERE email = "' . $data['email'] . '" AND nombre = "' . $data['name'] . '" AND apellidos = "' . $data['last_name'] . '"');

                DB::table("registro")->insert([
                    'tickets_adultos' => $data['adults'],
                    'tickets_infantiles' => 0,
                    'fecha_compra' => $mytime,
                    'id_evento' => $data['evento'],
                    'id_usuario' => $user[0]->id,
                    'id_fecha' => $data['fecha']

                ]);

                $cuposRestantes = $date[0]->cantidad_tickets - $data['adults'];

                DB::table("fechas")
                    ->where('id', $data['fecha'])
                    ->update([
                        'cantidad_tickets' => $cuposRestantes

                    ]);

                $errorCupos = false;
            } else {
                $errorCupos = true;
            }
        }

        return view('confirmation', compact('data', 'event', 'date', 'errorCupos'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'titulo' => 'required',
            'lugar' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'tipo_publico' => 'required',
            'descripcion' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'disponible' => 'required',
            
        ]);

        //
        $data = $request->all();
        $file = $request->file('img');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $event = DB::select('SELECT * FROM eventos WHERE id = "' . $data['id_evento'] . '"');
       
        if ($file != null) {
            $data['img'] = $event[0]->img; 

            $path = $file->storeAs('public/img', $data['img']);

            DB::table('eventos')->where('id', $data['id_evento'])->update([
                'titulo' => $data['titulo'],
                'lugar' => $data['lugar'],
                'categoria' => $data['categoria'],
                'precio' => $data['precio'],
                'tipo_publico' => $data['tipo_publico'],
                'descripcion' => $data['descripcion'],
                'img' => $data['img'],
                'disponible' => $data['disponible']
            ]);
            
           
        }else{
            DB::table('eventos')->where('id', $data['id_evento'])->update([
                'titulo' => $data['titulo'],
                'lugar' => $data['lugar'],
                'categoria' => $data['categoria'],
                'precio' => $data['precio'],
                'tipo_publico' => $data['tipo_publico'],
                'descripcion' => $data['descripcion'],
                'disponible' => $data['disponible']
            ]);
        }
        // save to storage/app/public/imgs as the new $filename
        
        //

        $createDate = false;
        $i = 0;
        $dates = DB::select('SELECT * FROM fechas WHERE id_evento = "' . $data['id_evento'] . '"');
        $length = count($dates); 

        while ($i < $length) {
            $fecha_hora = $data['fecha'.$i] .' '. $data['hora'.$i];

            DB::table('fechas')->where('id', $dates[$i]->id)->update([
                'fecha_hora' => $fecha_hora,
                'cantidad_tickets' => $data['cantidad_tickets'.$i],
                'id_evento' => $data['id_evento']
            ]);
    
            /*$dates[$i]->update([
                'fecha_hora' => $fecha_hora,
                'cantidad_tickets' => $data['cantidad_tickets'.$i],
                'id_evento' => $data['id_evento']
    
            ]);*/

            $i++;
        }

        while (!$createDate) {
            if (!empty($data['cantidad_tickets'.$i])) {
                $request->validate([
                    'fecha'.$i => 'required',
                    'hora'.$i => 'required',
                    'cantidad_tickets'.$i => 'required',
                ]);

                $fecha_hora = $data['fecha'.$i] .' '. $data['hora'.$i];

                DB::table("fechas")->insert([
                    'fecha_hora' => $fecha_hora,
                    'cantidad_tickets' => $data['cantidad_tickets'.$i],
                    'id_evento' => $data['id_evento']
        
                ]);
                $i++; 
            }else{
                $createDate = true; 
            }
        }
       

        return redirect("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        
        DB::table('eventos')->where('id', $id)->update([
            'disponible' => 0
        ]);

        return redirect('dashboard');
    }

    public function showEvent($id)
    {

        $event = DB::select('SELECT * FROM eventos WHERE id = "' . $id . '"');

        return view('auth.show', compact('event'));
    }

    public function editEvent($id)
    {
        $event = DB::select('SELECT * FROM eventos WHERE id = "' . $id . '"');
        $dates = DB::select('SELECT * FROM fechas WHERE id_evento = "' . $id . '"');

        return view('auth.edit', compact('event', 'dates'));
        
    }
}

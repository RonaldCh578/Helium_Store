<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $events=DB::select('SELECT * FROM eventos WHERE disponible = 1');
        return view('index', compact('events'));
    }

    public function showCategories($categoria)
    {
        //
        if ($categoria == "Todos los eventos") {
            $eventsSelected=DB::select('SELECT * FROM eventos WHERE disponible = 1');
            return view('category', compact('eventsSelected', 'categoria'));
        }else{
            $eventsSelected=DB::select('SELECT * FROM eventos WHERE categoria = "'.$categoria.'" AND disponible = 1');
            return view('/category', compact('eventsSelected', 'categoria'));
        }
        
    }

    public function showDetails($id)
    {
        //
        $eventDetail=DB::select('SELECT * FROM eventos WHERE disponible = 1 AND id = "'.$id.'"');
        $eventDates=DB::select('SELECT * FROM fechas WHERE id_evento = "'.$id.'"');
        $categoria = $eventDetail[0]->categoria;
        $eventsSelected=DB::select('SELECT * FROM eventos WHERE categoria = "'.$categoria.'" AND disponible = 1');
        return view('event_detail', compact('eventDetail', 'eventDates', 'eventsSelected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $event)
    {
        //
    }
}

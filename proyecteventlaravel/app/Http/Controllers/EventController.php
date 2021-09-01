<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Ticket;
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
        $evento = Evento::all();
        //$evento = DB::select('select * from evento');
        //return $evento;
        return view('index', compact('evento'));
        //return $evento = DB::select('select * from evento where id_evento=?');
        
    }

    public function eventdetails1($id_evento)
    {
        $detalle_evento = Evento::where ('id_evento', '=', $id_evento)->first();
        
        //return $detalle_evento;
        return view('event-detail-1', compact('detalle_evento'));
    }

    public function ticketpart1()
    {


        return view('ticket-part-1'); 
    }

    public function ticketpart2()
    {
        return view('ticket-part-2');
    }

    public function ticketpartpurchase()
    {
        return view('ticket-purchase');
    }

    public function ticketstore(Request $request)
    {
        $ticket = new Ticket();
        $ticket->id_evento = $request->id_evento;
        $ticket->fecha_hora = $request->fecha_hora;
        $ticket->nombre = $request->nombre;
        $ticket->correo = $request->correo;
        $ticket->espacio_ninio = $request->espacio_ninio;
        $ticket->espacio_adulto = $request->espacio_adulto;
        $ticket->total = $request->total;
        $ticket->tickets_idevent = $request->tickets_idevent;
        $ticket->save();
        return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     *    DB::insert('insert into evento(imagen, titulo, lugar_evento, fecha_hora, categoria, descripcion,
     *    tipo_pago, restriccion_evento, precio_adultos, precio_ninios) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
     *    [$valor1, $valor2]);
     * 
     * 
     */
  

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$evento = \DB::table('evento')
        //->select('evento.*')
        //->orderBy('id','DESC')
        //->get();
        //return view('events')->with('evento',$evento);
        //return DB::select('select * from evento');
        //return DB::select('select * from evento where id_evento=?', [$id]);
        //return 'texto'.$id;
        //return  view("custom",['id'=> $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$events = Evento::latest()->paginate(5);
    
        //return view('events.index',compact('events'))
        //    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        return view('events.show',compact('event'));
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
        return view('events.edit',compact('event'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $event)
    {

    }
}
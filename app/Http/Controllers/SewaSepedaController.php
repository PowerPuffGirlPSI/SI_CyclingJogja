<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SewaSepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepedas = DB::table('sepedas')->get();
        $events = DB::table('events')->where('waktu_pelaksanaan','!=','{{$event->waktu_pelaksanaan}}')
        ->orderBy('waktu_pelaksanaan', 'asc')
        ->limit(2)
        ->get();
        return view('sewasepedawelcome', compact('sepedas','events'));
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
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Event $event)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Event $event)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Event $event)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Event $event)
    // {
    //     //
    // }
}

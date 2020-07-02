<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $event = DB::table('events')->orderBy('waktu_pelaksanaan', 'desc')->first();
        $events = DB::table('events')->where('waktu_pelaksanaan','!=','{{$event->waktu_pelaksanaan}}')
        ->orderBy('waktu_pelaksanaan', 'asc')
        ->limit(2)
        ->get();
 
        
        $user = Auth::user();

        

        return view('homepage.index',compact('event','user','events'));
    }

    public function update_profil(Request $request){
        $request->user()->update(
        $request->all()
    );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

	return view('homepage.tambahevent');
 
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}

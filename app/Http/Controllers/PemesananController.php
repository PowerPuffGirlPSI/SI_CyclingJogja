<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $events = DB::table('events')->where('waktu_pelaksanaan','!=','{{$event->waktu_pelaksanaan}}')
        ->orderBy('waktu_pelaksanaan', 'asc')
        ->limit(2)
        ->get();
 

        $user = Auth::user(); 
        //print($user->id);
        $event = DB::table('events');
        $event = DB::table('events')->where('id', $id)->get();
        $user = DB::table('users')->where('id', $user->id)->get();

        // print_r($event);
        // print_r($user);
        // die;

        return view('pemesanan',compact('event','user','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store($id_event)
    {
        $user = Auth::user();
        $id_user =  $user->id;
        $status_pemesanan= NULL;
        $token = rand(1, 99999999);
        // $id_event=$events->id;

	DB::table('pendaftars')->insert([
        'id_user' => $id_user,
        'id_event'=>$id_event,
        'status_pemesanan'=>$status_pemesanan,	
        'token' => $token,
    ]);

	return redirect('/tiket');

}

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
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
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}

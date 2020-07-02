<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); 
        //print($user->id);
        $events = DB::table('events')->where('waktu_pelaksanaan','!=','{{$event->waktu_pelaksanaan}}')
        ->orderBy('waktu_pelaksanaan', 'asc')
        ->limit(2)
        ->get();
        $tiket = DB::table('pendaftars')->where('id_user', $user->id)
                ->join('users','pendaftars.id_user','=','users.id')
                ->join('events','pendaftars.id_event','=','events.id')
                ->get();
        $tiketsepeda = DB::table('penyewas')->where('id_user', $user->id)
        ->join('users','penyewas.id_user','=','users.id')
        ->join('sepedas','penyewas.id_sepeda','=','sepedas.id')
        ->join('events','penyewas.id_event','=','events.id')
        ->get();

        return view('tiket',compact('tiket','tiketsepeda','events'));
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
        $user = Auth::user();
        $id_user =  $user->id;
        $id_event=  $id->id;

	// insert data ke table pegawai
	DB::table('pendaftars')->insert([
        'id_user' => $id_user,
        'id_event'=>$id_event
        ]);
        return redirect('/tiket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiket $tiket)
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
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}

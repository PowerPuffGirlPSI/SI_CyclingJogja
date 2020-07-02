<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('events')->where('waktu_pelaksanaan','!=','{{$event->waktu_pelaksanaan}}')
        ->orderBy('waktu_pelaksanaan', 'asc')
        ->limit(2)
        ->get();
 
        $sepedas = DB::table('sepedas')->get();
     
            return view('sewa', compact('sepedas','events'));
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
    //  * @param  \App\Pendaftar  $pendaftar
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Pendaftar $pendaftar)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Pendaftar  $pendaftar
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Pendaftar $pendaftar)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Pendaftar  $pendaftar
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Pendaftar $pendaftar)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Pendaftar  $pendaftar
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Pendaftar $pendaftar)
    // {
    //     //
    // }
}

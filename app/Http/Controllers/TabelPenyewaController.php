<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabelPenyewaController extends Controller
{
    public function index()
    {
    	$penyewa = DB::table('penyewas')->get();
    	return view('/Admin/tabel_penyewa',compact('penyewa'));
 
    }
    public function hapus($id)
    {
    
        DB::table('penyewas')->where('id',$id)->delete();
            
        return redirect('/admin/tabel_penyewa');
    }
    public function edit($id)
    {
    
        $events = DB::table('penyewas')->where('id',$id)->get();
    
        return view('/Admin/editpenyewa',compact('penyewas'));
    
    
    }
    public function update(Request $request)
{

	DB::table('penyewas')->where('id',$request->id)->update([
		'nama_event' => $request->nama_event,
		'rincian_event' => $request->rincian_event,
		'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
		'lokasi' => $request->lokasi,
		'rute' => $request->rute,
		'jarak' => $request->jarak,
		'durasi' => $request->durasi,
		'harga_tiket' => $request->harga_tiket,
		'kuota' => $request->kuota,
	]);

	return redirect('/admin/tabel_event');
}
}

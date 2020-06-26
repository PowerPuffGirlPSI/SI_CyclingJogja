<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TabelTiketController extends Controller
{
    public function index()
    {
        
    	$pendaftars = DB::table('pendaftars')->get();
        return view('/Admin/tabel_tiket',compact('pendaftars'));

    }
    public function hapus($id)
    {
    
        DB::table('pendaftars')->where('id',$id)->delete();
            
        return redirect('/admin/tabel_tiket');
    }
    public function edit($id)
{
	$pendaftar = DB::table('pendaftars')->where('id',$id)->get();
	return view('/admin/editPendaftar',['pendaftar' => $pendaftar]);
 
}
public function update(Request $request)
{
	
	DB::table('pendaftars')->where('id',$request->id)->update([
	// 	'id_user' => $request->id_user,
	// 	'id_event' => $request->id_event,
	// 	'token' => $request->token,
        'status_pemesanan' => $request->status_pemesanan,
        // 'created_at' => $request->created_at

	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/tabel_tiket');
}

// public function hapus($id)
// {

// 	DB::table('events')->where('id',$id)->delete();
		
// 	return redirect('/admin/tabel_event');
// }
}
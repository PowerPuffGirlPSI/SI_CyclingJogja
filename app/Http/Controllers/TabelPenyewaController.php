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
    
        $penyewa = DB::table('penyewas')->where('id',$id)->get();
    
        return view('/Admin/editpenyewa',compact('penyewa'));
    
    
    }
    public function update(Request $request)
{

	DB::table('penyewas')->where('id',$request->id)->update([
		'kondisi' => $request->kondisi,
		'status' => $request->status,
		'status_penyewaan' => $request->status_penyewaan,
		'kondisi_kembali_penyewaan' => $request->kondisi_kembali_penyewaan,
	]);

	return redirect('/admin/tabel_penyewa');
}
}

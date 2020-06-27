<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanPenyewaController extends Controller
{
    public function index()
    {
        $laporan_penyewa= DB::table('penyewas')
        ->join('users', 'penyewas.id_user', '=', 'users.id')
        ->join('sepedas', 'penyewas.id_sepeda', '=', 'sepedas.id')
        ->get();
        return view('/admin/laporan_penyewa',['laporan_penyewa' => $laporan_penyewa]);
    }
}

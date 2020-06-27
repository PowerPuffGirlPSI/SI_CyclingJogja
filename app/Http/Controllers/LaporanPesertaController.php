<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanPesertaController extends Controller
{
    
        public function index()
        {
            $laporan_peserta= DB::table('pendaftars')
            ->join('users', 'pendaftars.id_user', '=', 'users.id')
            ->join('events', 'pendaftars.id_event', '=', 'events.id')
            ->get();
            return view('/admin/laporan_peserta',['laporan_peserta' => $laporan_peserta]);
        }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use Validator;


class LaporanSepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //BAR CHART EVENT
    $pendaftar = DB::table('events')
        ->join('pendaftars', 'events.id', '=', 'pendaftars.id_event')
            ->select(DB::raw('events.nama_event,sum(pendaftars.jumlah_barang_pesan)'))
            ->groupBy('events.nama_event')
            ->get();
            
        $data = [];

        foreach($pendaftar as $row) {
            $data['label'][] = $row->nama_event;
            $data['data'][] = (int) $row->{'sum(pendaftars.jumlah_barang_pesan)'};
        }

        $data['chart_data'] = json_encode($data);
    
        
    //PIE CHART SEPEDA
    $penyewaan = DB::table('sepedas')
        ->select(DB::raw('jenis,sum(sewa)'))
        ->groupBy('jenis')
        ->get();  
    $data1 = [];
 
    foreach($penyewaan as $row) {
        $data1['label1'][] = $row->jenis;
        $data1['data1'][] = (int) $row->{'sum(sewa)'};
      }
 
    $data['chart_data1'] = json_encode($data1);



    //LINE CHART PENDAPATAN
    $pendapatan = DB::table('events')
            ->select(DB::raw('events.nama_event, sum(events.harga_tiket*pendaftars.jumlah_barang_pesan) as pendapatan'))
            ->join('pendaftars','events.id','=','pendaftars.id_event')
            ->whereIn('pendaftars.status_pemesanan', function($query)
            {
            $query->select('pendaftars.status_pemesanan')
                ->from('pendaftars')
                ->join('events','events.id','=','pendaftars.id_event')
                ->where('pendaftars.status_pemesanan','like','sudah dibayar')
                ->groupBy('events.id');
            })
            ->groupBy('events.nama_event')
            ->get();
    
    $data2 = [];
 
    foreach($pendapatan as $row) {
        $data2['label2'][] = $row->nama_event;
        $data2['data2'][] = (int) $row->pendapatan;
      }
 
    $data['chart_data2'] = json_encode($data2);

    return view('/Admin/laporan_sepeda', $data);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // <!--public function create()
    // {
    //     //
    // } -->

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Pegawai extends Model
{
    protected $primaryKey = ['id'];
	protected $fillable = ['gambar_event','nama_event','rincian_event','waktu_pelaksanaan','berat_badan','lokasi','rute','jarak','durasi','harga_tiket','kuota'];
}
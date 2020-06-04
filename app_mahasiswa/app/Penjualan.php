<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table='penjualan';
    protected $primaryKey='id_penjualan';
    protected $fillable=['tanggal_penjualan','jenis_pembayaran','id_penjual','id_pembeli'];
}

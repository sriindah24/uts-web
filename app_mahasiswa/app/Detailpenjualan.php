<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    //
    protected $table='detailpenjualan';
    protected $primaryKey='id_detailpenjualan';
    protected $fillable=['nama_barang','harga_satuan','jumlah_penjualan','total_harga','id_barang','id_penjualan'];
}

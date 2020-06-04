<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{

    protected $table='pembelian'; 
    protected $primaryKey='id_pembelian';
    protected $fillable=['tanggal_pembelian','tanggal_terima','id_supplier','id_penjual_pesan','id_penjual_terima'];
    //
}
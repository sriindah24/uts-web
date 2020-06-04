<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonbarang extends Model
{
    protected $table='barang';
    protected $primaryKey='id_barang';
    protected $fillable=['kode_barang','nama_barang','stok'];
   //protected $guarded=[];
    //
}



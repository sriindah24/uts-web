<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    //
    protected $table='gudang';
    protected $primaryKey='id_gudang';
    protected $fillable=['kode_gudang','alamat_gudang'];
}

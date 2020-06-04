<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    //
    protected $table='penjual';
    protected $primaryKey='id_penjual';
    protected $fillable=['nama_penjual','alamat','no_hp'];
}

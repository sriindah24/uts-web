<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonadminpembeli extends Model
{
    protected $table='pembeli';
    protected $primaryKey='id_pembeli';
    protected $fillable=['nama_pembeli','alamat','no_hp'];
   //protected $guarded=[];
    //
}
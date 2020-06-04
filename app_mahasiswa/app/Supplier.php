<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table='supplier'; 
    protected $primaryKey='id_supplier';
    protected $fillable=['nama_supplier','alamat','no_hp'];
    
}
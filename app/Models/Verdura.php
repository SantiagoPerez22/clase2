<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verdura extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'verduras';
 
    public function almacenes(){
        return $this->belongsTo('App\Models\Almacen', 'almacen_id');
    }
}

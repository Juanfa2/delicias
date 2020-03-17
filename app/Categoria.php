<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categoria";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function productos(){
    	return $this->hasMany(Producto::class, 'categoria_id');
    }
}

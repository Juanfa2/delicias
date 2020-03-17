<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];


    public function categoria(){
    	return $this->belongsTo("App\Categoria", "cateogoria_id");
    }
}

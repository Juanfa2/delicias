<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function showCategoria ($id){
    	$productos = Categoria::find($id)->productos;
    	$categorias = Categoria::all();
    	return view('showProductos', compact('productos' , 'categorias'));
    }

    public function showFilter(Request $request){

    	$productos = Categoria::find($request["categoria"])->productos;
    	$categorias = Categoria::all();
    	return view('showProductos', compact('productos' , 'categorias'));
    }
}

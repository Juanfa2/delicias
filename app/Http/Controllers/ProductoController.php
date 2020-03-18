<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{

	 public function showAll(){
    	$productos = Producto::all();
    	$categorias = Categoria::all();

    	return view('showProductos', compact('productos' , 'categorias'));
    }

    public function addProducto(Request $request){

    	$errores = [
    		"nombre" => 'required|string|max:60|min:3',
    		"precio" => 'required|numeric',
    		"descripcion" => 'string|max:255|',
    	];

    	$mensajes = [
    		'required' => "El  :attribute es necesario",
    		'max' => "El  :attribute tiene un maximo de :max caracteres ",
    		'min' => "El  :attribute debe ser como minimo de :min caracteres",
    		'numeric' => "El :attribute debe ser numerico",
    		'string' => "El :attribute debe ser solo letras"
    	];

    	$this->validate($request,$errores,$mensajes);
    	 
    	$producto = new Producto();
    	$producto->nombre = $request["nombre"];
    	$producto->precio = $request["precio"];
    	$producto->descripcion = $request["descripcion"];
    	$producto->categoria_id = $request["categoria"];

        if ( $request->file("archivo") != null ) {
            $ruta = $request->file("archivo")->store("public/fotoProducto");
            $nombre = basename($ruta);
            $producto->foto = $nombre;
        }

    	$producto->save();

    	return redirect("/");
    }	

    public function addProductoForm(){
    	$categorias = Categoria::all();

    	return view('addProducto', compact('categorias'));

    }

    public function editProductoForm($id){
    	$producto = Producto::find($id);
    	return view('editProducto' ,compact('producto'));

    }

    public function editProducto(Request $request){
    	$errores = [
    		"nombre" => 'required|string|max:60|min:3',
    		"precio" => 'required|numeric',
    		"descripcion" => 'string|max:255|',
    	];

    	$mensajes = [
    		'required' => "El  :attribute es necesario",
    		'max' => "El  :attribute tiene un maximo de :max caracteres ",
    		'min' => "El  :attribute debe ser como minimo de :min caracteres",
    		'numeric' => "El :attribute debe ser numerico",
    		'string' => "El :attribute debe ser solo letras"
    	];

    	$this->validate($request,$errores,$mensajes);
    	 
    	$producto = Producto::find($request["id"]);
    	$producto->nombre = $request["nombre"];
    	$producto->precio = $request["precio"];
    	$producto->descripcion = $request["descripcion"];

        if ( $request->file("archivo") != null ) {
            $ruta = $request->file("archivo")->store("public/fotoProducto");
            $nombre = basename($ruta);
            $producto->foto = $nombre;
        }

    	$producto->save();

    	return redirect("/");
    }
}

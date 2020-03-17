@extends('inicio')


@section('contenido')

@foreach($categorias as $categoria)
@if($categoria["nombre"] != "Sin categoria")

<a href="{{ url("/productos/categoria/$categoria->id") }}" class="btn btn-outline-primary mt-4">{{ $categoria["nombre"] }}</a>
@endif
@endforeach
<a href="{{ url("/productos/show") }}" class="btn btn-outline-primary mt-4">Todo</a>

<div class="row">
@forelse($productos as $producto )

	<div class="col-md-4 mb-2">
		<div class="card-deck mt-4">
			<div class="card">
				<img src="/storage/fotoProducto/{{ $producto['foto'] }}" class="card-img-top" alt="producto-image">
				<div class="card-body">
					<h5 class="card-title">{{ $producto["nombre"] }}</h5>
					<p class="card-text">Precio:${{ $producto["precio"] }} </p>
				</div>
				<a href="{{ url("productos/edit/$producto->id") }}" class="btn btn-outline-primary mt-4">Modificar</a>
			</div>

		</div>
	</div>  
	@empty
	<h2>No hay productos</h2>

	@endforelse
</div>  



@endsection


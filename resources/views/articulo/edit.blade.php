@extends('layouts.plantillabase')
@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/articulos/{{$articulo->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb3-3">
        <label for="" class="form-label">Codigo</label>
        <input  name="codigo" id="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Descripción</label>
        <input name="descripcion" id="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Cantidad</label>
        <input name="cantidad" id="cantidad" type="text" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Precio</label>
        <input name="precio" id="precio" step="any"  type="number" class="form-control" tabindex="4" value="{{$articulo->precio}}">
    </div>

    <a href="/articulos" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection
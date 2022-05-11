@extends('layouts.plantillabase')
@section('contenido')

<h1>Crear Registros</h1>
<form action="/articulos" method="post">
    @csrf
    <div class="mb3-3">
        <label for="" class="form-label">Codigo</label>
        <input  name="codigo" id="codigo" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Descripción</label>
        <input name="descripcion" id="descripcion" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Cantidad</label>
        <input name="cantidad" id="cantidad" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb3-3">
        <label for="" class="form-label">Precio</label>
        <input name="precio" id="precio" step="any"  type="number" value="0.00" class="form-control" tabindex="4">
    </div>

    <a href="/articulos" class="btn btn-secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection
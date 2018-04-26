@extends('layouts.admin.theme')
@section('title', 'Editando: '.$link->name)
@section('content')
<a href="/admin/menu" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <form action="{{route('link.update', $link->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-group">
          <label>Titulo: </label>
          <input type="text" name="name" value="{{$link->name}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Link: </label>
          <input type="text" class="form-control" name="url" value="{{$link->url}}">
        </div>
        <div class="form-group">
          <label>Ordem: </label>
          <input type="number" class="form-control" name="order" value="1" min="0" max="100">
        </div>
        <button type="submit" class="btn btn-success" name="button">Salvar</button>
      </form>
    </div>
</div>
@endsection

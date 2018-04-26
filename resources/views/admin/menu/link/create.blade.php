@extends('layouts.admin.theme')
@section('title', 'Adicionando link ao '.$menu->name)
@section('content')
<a href="/admin/menu" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <form action="{{route('link.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label>Titulo: </label>
          <input type="text" name="name" value="" class="form-control">
          <p class="help-block">Titulo que aparecerá no menu.</p>
        </div>
        <div class="form-group">
          <label>Link: </label>
          <input type="text" class="form-control" name="url" value="">
          <p class="help-block">Insira o link para onde o menu irá apontar.</p>
        </div>
        <div class="form-group">
          <label>Ordem: </label>
          <input type="number" class="form-control" name="order" value="1" min="0" max="100">
        </div>
        <input type="hidden" name="menu_id" value="{{$menu->id}}">
        <button type="submit" class="btn btn-success" name="button">Criar</button>
      </form>
    </div>
</div>
@endsection

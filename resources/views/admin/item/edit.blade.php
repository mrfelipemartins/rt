@extends('layouts.admin.theme')
@section('title', 'Editando: '.$item->title)
@section('content')
<a href="/admin/block/{{$item->block_id}}/edit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <form action="{{route('item.update', $item->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-group">
          <label>Titulo: </label>
          <input type="text" name="title" value="{{$item->title}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Descrição: </label>
          <textarea name="description" class="form-control" rows="3">{{$item->description}}</textarea>
        </div>
        <div class="form-group">
          <label>Link: </label>
          <input type="text" name="url" value="{{$item->url}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Imagem: </label>
          <input type="file" accept="image/*" name="image">
          <p class="help-block">Caso queira manter a imagem atual basta nao mexer neste campo.</p>
        </div>
        <button type="submit" class="btn btn-success" name="button">Salvar</button>
      </form>
    </div>
</div>
@endsection

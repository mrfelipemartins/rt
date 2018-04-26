@extends('layouts.admin.theme')
@section('title', 'Criando Slide')
@section('content')
<a href="/admin/slide" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <form action="{{route('slide.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Nome: </label>
          <input type="text" name="name" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Link: </label>
          <input type="text" class="form-control" name="link" value="">
          <p class="help-block">Insira o link para onde o menu irá apontar.</p>
        </div>
        <div class="form-group">
          <label>Imagem: </label>
          <input type="file" name="image" value="" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success" name="button">Criar</button>
      </form>
    </div>
</div>
@endsection

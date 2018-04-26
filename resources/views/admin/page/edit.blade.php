@extends('layouts.admin.theme')
@section('title', 'Editando: '.$page->title)
@section('content')
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<a href="/admin/pages" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <form action="{{route('pages.update', $page->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-group">
          <label>Titulo: </label>
          <input type="text" name="title" value="{{$page->title}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Conteúdo: </label>
          @if($page->content == '[]')<br>
            O conteúdo desta página não pode ser alterado por aqui. Tente pelo menu "Blocos".
          @endif
          <textarea @if($page->content == '[]') style="display:none" @endif  name="content" class="form-control" rows="3">{{base64_decode($page->content)}}</textarea>
        </div>
        <div class="form-group">
          <label>Slug: </label>
          <input type="text" name="url" value="{{$page->slug}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success" name="button">Salvar</button>
      </form>
    </div>
</div>
@if($page->content != '[]')
<script>
	CKEDITOR.replace( 'content' );
</script>
@endif
@endsection

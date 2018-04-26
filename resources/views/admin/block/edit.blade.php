@extends('layouts.admin.theme')
@section('title', 'Blocos')
@section('content')
<a href="/admin/block" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Link</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($block->items as $item)
            <tr>
              <td><img src="/storage/{{str_replace('images/', '', $item->image)}}" height="50" alt=""> </td>
              <td>{{$item->title}}</td>
              <td>{{$item->description}}</td>
              <td>{{$item->link}}</td>
              <td><a href="/admin/item/{{$item->id}}/edit" class="btn btn-flat btn-primary"><i class="fa fa-eye"></i> Editar</a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection

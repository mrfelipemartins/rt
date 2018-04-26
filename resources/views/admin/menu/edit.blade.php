@extends('layouts.admin.theme')
@section('title', 'Editando: '.$menu->name)
@section('content')
<a href="/admin/menu" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a> &nbsp; <a href="/admin/link/create?menu={{$menu->id}}" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Adicionar</a>
<br><br>
<div class="box">
    <div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>URL</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($menu->links()->orderBy('order', 'asc')->whereNull('parent_id')->get() as $link)
          <tr>
              <td>{{$link->name}}</td>
              <td>{{$link->url}}</td>
              <td>
                <a href="/admin/link/{{$link->id}}/edit" class="btn btn-primary btn-flat btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                <a href="/admin/link/destroy/{{$link->id}}" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-times"></i> Remover</a>
              </td>
          </tr>
          @if($link->child()->count() > 0)
            @foreach($link->child as $child)
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-{{$child->name}}</td>
                <td>{{$child->url}}</td>
                <td>
                  <a href="/admin/link/{{$child->id}}/edit" class="btn btn-primary btn-flat btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="/admin/link/destroy/{{$child->id}}" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-times"></i> Remover</a>
                </td>
              </tr>
            @endforeach
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection

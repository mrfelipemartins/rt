@extends('layouts.admin.theme')
@section('title', 'Menus')
@section('content')
<div class="box">
    <div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th>Menu</th>
            <th>Descrição</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($menus as $menu)
            <tr>
              <td>{{$menu->name}}</td>
              <td>{{$menu->description}}</td>
              <td><a href="/admin/menu/{{$menu->id}}/edit" class="btn btn-flat btn-success"><i class="fa fa-pencil"></i> Editar</a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection

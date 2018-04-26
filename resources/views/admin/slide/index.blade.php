@extends('layouts.admin.theme')
@section('title', 'Slides')
@section('content')
<a href="/admin/slide/create" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Adicionar</a>
<br><br>
<div class="box">
  <div class="box-body">
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Link</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($slides as $slide)
        <tr>
          <td>{{$slide->name}}</td>
          <td>{{$slide->link}}</td>
          <td>
            <a href="/admin/slide/delete/{{$slide->id}}" class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@extends('layouts.admin.theme')
@section('title', 'Páginas')
@section('content')
<div class="box">
    <div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th>Pagina</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($pages as $page)
            <tr>
              <td>{{$page->title}}</td>
              <td><a href="/admin/pages/{{$page->id}}/edit" class="btn btn-flat btn-success"><i class="fa fa-eye"></i> Editar</a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection

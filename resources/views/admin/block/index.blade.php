@extends('layouts.admin.theme')
@section('title', 'Blocos')
@section('content')
<div class="box">
    <div class="box-body">
      <table class="table">
        <thead>
          <tr>
            <th>Bloco</th>
            <th>Página</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($blocks as $block)
            <tr>
              <td>{{$block->name}}</td>
              <td>{{$block->page}}</td>
              <td><a href="/admin/block/{{$block->id}}/edit" class="btn btn-flat btn-success"><i class="fa fa-eye"></i> Ver Items</a> </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection

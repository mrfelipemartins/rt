@extends('layouts.admin.theme')
@section('title', 'Configurações')
@section('content')
<div class="box">
  <div class="box-body">
    <form action="{{route('config.store')}}" method="post">
      @csrf
      @foreach($configs as $config)
        <div class="form-group">
          <label>{{$config->description}}</label>
          <input type="hidden" name="config[{{$config->key}}][id]" value="{{$config->id}}">
          <input type="text" name="config[{{$config->key}}][value]" value="{{$config->value}}" class="form-control">
        </div>
      @endforeach
      <button type="submit" class="btn btn-success" name="button">Salvar Configurações</button>
    </form>
  </div>
</div>
@endsection

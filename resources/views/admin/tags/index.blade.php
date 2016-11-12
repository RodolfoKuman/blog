@extends('admin.template.main')

@section('title', 'listado tags')

@section('content')
  <div class="container">

  <h3>Lista de tags</h3>
  <a class="btn btn-info" href="{{ route('tags.create')}}">Registrar nuevo tag</a>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Acción</th>
    </thead>
    <tbody>
      @foreach ($tags as $tag )
        <tr>
          <td> {{$tag->id}} </td>
          <td> {{$tag->name}} </td>
          <td>
            <a href="{{ route('admin.tags.destroy',$tag->id) }}" onclick="return confirm('Este etiqueta se borrara')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
            <a href="{{ route('admin.tags.edit',$tag->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>

  <div class="text-center">
    {!! $tags->render() !!}
  </div>
@endsection

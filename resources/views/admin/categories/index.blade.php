@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')
  <div class="container">
    <a class="btn btn-info" href="{{ route('categories.create')}}">Registrar nueva categoria</a>
    <h3>Lista de categorias</h3>

    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
      </thead>
      <tbody>
        @foreach($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>

          <td>
            <a href="{{ route('admin.categories.destroy',$category->id) }}" onclick="return confirm('Este usuario se borrara')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
            <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {!! $categories->render() !!}
  </div>


@endsection

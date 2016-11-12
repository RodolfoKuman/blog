@extends('admin.template.main')

@section('title','Editar Categoria' . $category->name)

@section('content')
  <div class="container">
    <h4>Editar Categoria {{ $category->name }}</h4>
  </div>

{!! Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) !!}

<div class="container">
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',$category->name,['class' => 'form-control','required' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
  </div>

</div>

{!! Form::close() !!}

@endsection

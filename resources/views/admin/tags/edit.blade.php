@extends('admin.template.main')

@section('title','Editar tag' . $tag->name)

@section('content')
  <div class="container">
    <h4>Editar Categoria {{ $tag->name }}</h4>
  </div>

{!! Form::model($tag, array('route' => array('tags.update', $tag->id), 'method' => 'PUT')) !!}

<div class="container">
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',$tag->name,['class' => 'form-control','required' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
  </div>

</div>

{!! Form::close() !!}

@endsection

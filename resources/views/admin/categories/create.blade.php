@extends('admin.template.main')

@section('title', 'Agregar categoria')

@section('content')
  <div class="container">
    @if(count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>

      </div>
    @endif
  </div>
  <div class="container">

    <h2>Crear categoria</h2>
    {!! Form::open(['route' => 'categories.store' , 'method' => 'POST' ]) !!}
      <div class="container">
        <div class="form-group">
          {!! Form::label('name','nombre')  !!}
          {!! Form::text('name',null,['class' =>'form-control' , 'placeholder' => 'Nombre de la categoria' , 'required' ])  !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Registrar' , ['class' => 'btn btn-primary'])  !!}
        </div>
      </div>
    {!! Form::close() !!}

  </div>
@endsection

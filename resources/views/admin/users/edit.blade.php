@extends('admin.template.main')

@section('title','Editar Usuario' . $user->name)

@section('content')
  <div class="container">
    <h4>Editar usuario {{ $user->name }}</h4>
  </div>

{!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}

<div class="container">
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',$user->name,['class' => 'form-control','required' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('email', 'Correo electronico') !!}
    {!! Form::email('email',null,['class' => 'form-control','required' ,'placeholder' => 'example@gmail.com' ]) !!}
  </div>



  <div class="form-group">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type',['' =>'Seleccione un tipo de Usuario','member' => 'Miembro','admin' => 'Administrador' ],null ,['class' => 'form-control' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
  </div>

</div>


{!! Form::close() !!}

@endsection

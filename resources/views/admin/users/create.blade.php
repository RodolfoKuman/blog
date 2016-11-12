@extends('admin.template.main')

@section('title','Crear Usuario')

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


{!! Form::open(['route' => 'users.store' , 'method' => 'POST' ]) !!}

<div class="container">
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',null,['class' => 'form-control','required' ,'placeholder' => 'Coloque su nombre' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('email', 'Correo electronico') !!}
    {!! Form::email('email',null,['class' => 'form-control','required' ,'placeholder' => 'example@gmail.com' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password',['class' => 'form-control','required' ,'placeholder' => 'Ingrese contraseña' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type',['' =>'Seleccione un tipo de Usuario','member' => 'Miembro','admin' => 'Administrador' ],null ,['class' => 'form-control' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
  </div>

</div>


{!! Form::close() !!}

@endsection

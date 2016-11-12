@extends('admin.template.main')

@section('title','Login')

@section('content')
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open([ 'route' => 'admin.auth.login', 'method' => 'POST'  ]) !!}
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', null ,['class' => 'form-control', 'placeholder' => 'example@mail.com']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password' ,['class' => 'form-control', 'placeholder' => '*********']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Iniciar sesión' ,['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close()!!}
    </div>

  </div>

@endsection

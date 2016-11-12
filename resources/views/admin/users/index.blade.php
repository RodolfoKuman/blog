@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

  <div class="container">

  <a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Tipo</th>
      <th>Acción</th>
    </thead>
    <tbody>


      @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email}}</td>
          <td class="font-medium">
            @if($user->type == "admin")
              <span class="label label-danger">{{ $user->type }}</span>
            @else
              <span class="label label-primary">{{ $user->type }}</span>
            @endif
          </td>
          <td>
            <a href="{{ route('admin.users.destroy',$user->id) }}" onclick="return confirm('Este usuario se borrara')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
            <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
{!! $users->render() !!}
</div> <!--container--->
@endsection

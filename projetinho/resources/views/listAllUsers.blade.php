@extends('layout')

@section('content')
@include('menu')
<table class="container mx-auto">
  <tr>
    <td>#ID</td>
    <td>Nome:</td>
    <td>E-mail:</td>
    <td>Ações:</td>
  </tr>
  @foreach ($users as $user)
    <tr class="odd:bg-white even:bg-slate-50">
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-700"><a href="listUser/{{$user->id}}">Ver Usuario</a></button>
          <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-700"><a href="{{ route('editUser', $user->id) }}">Editar</a></button>
          <form action="{{ route('listAllUsers.destroy', $user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" type="submit">Excluir</button>
        </form>        
      </td>
    </tr>
  @endforeach
  
</table>
@endsection
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
          <a class="text-blue-700 hover:text-sky-400"   href="listUser/{{$user->id}}">Ver Usuario</a>
          <form action="" method="post">
            <input type="hidden" name="User" value="">
            <button  class="bg-red-500 text-center mx-auto" type="subit" value="remover">remover</button>
          </form>
      </td>
    </tr>
  @endforeach
</table>
@endsection
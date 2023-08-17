@extends('layout')

@section('content')
    <h1 class="text-center text-2xl">Lista de usuarios</h1>
    <div class="container mx-auto">
        <p>Username: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>desde {{ date('d/m/Y', strtotime($user->created_at)) }}</p>
    </div>
@endsection

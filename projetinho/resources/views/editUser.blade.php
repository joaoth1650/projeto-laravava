@extends('layout')

@section('content')
    @include('menu')

    <form action="{{ route('updateUser', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-bold mb-1" for="nome">Nome:</label>
            <input class="w-full border rounded px-3 py-2" type="text" name="nome" value="{{ $user->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-bold mb-1" for="email">Email:</label>
            <input class="w-full border rounded px-3 py-2" type="email" name="email" value="{{ $user->email }}"
                required>
        </div>
        <div>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" type="submit">Atualizar</button>
        </div>
    </form>
@endsection

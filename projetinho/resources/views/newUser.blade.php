@extends('layout')

@section('title', 'Formulário de Cadastro')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        @if(session('success'))
            <p class="mb-4 text-green-500">{{ session('success') }}</p>
        @endif

        <form action="{{ route('cadastro.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-bold mb-1" for="nome">Nome:</label>
                <input class="w-full border rounded px-3 py-2" type="text" name="nome" required>
                @error('nome')
                    <p class="text-red-500 text-2xl">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-bold mb-1" for="email">Email:</label>
                <input class="w-full border rounded px-3 py-2" type="email" name="email" required>
                @error('email')
                    <p class="text-red-500 text-2xl">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-1" for="senha">Senha:</label>
                <input class="w-full border rounded px-3 py-2" type="password" name="senha" required>
                @error('senha')
                    <p class="text-red-500 text-2xl">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection

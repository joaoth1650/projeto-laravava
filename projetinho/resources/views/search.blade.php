@extends('layout')

@section('title', 'Pokemon')

@section('content')
    <div class="max-w-md mx-auto mt-8 p-6 border rounded shadow">
        <h1 class="text-2xl font-semibold mb-4">Pokemon Search</h1>
        
        <form method="post" action="/search" class="flex">
            @csrf
            <input type="text" id="pokemonName" name="pokemonName" class="flex-grow p-2 border rounded-l focus:outline-none">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Search</button>
        </form>

        @if(isset($pokemon))
            <div class="mt-4">
                <h2 class="text-lg font-semibold mb-2">Pokemon Data</h2>
                <pre class="bg-gray-100 p-4 rounded">{{ json_encode($pokemon, JSON_PRETTY_PRINT) }}</pre>
            </div>
        @endif
    </div>
@endsection

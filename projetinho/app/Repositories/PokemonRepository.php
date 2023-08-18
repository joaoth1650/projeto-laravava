<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class PokemonRepository
{
    protected $BaseUrl = 'https://pokeapi.co/api/v2/';

    public function getPokemon($pokemonName)
    {
        $response = Http::get($this->BaseUrl . 'pokemon/' . $pokemonName);

        if ($response->ok()) {
            return $response->json();
        }

        return null;
    }
}

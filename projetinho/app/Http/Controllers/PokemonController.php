<?php
namespace App\Http\Controllers;

use App\Repositories\PokemonRepository;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    protected $pokemonRepository;

    public function __construct(PokemonRepository $pokemonRepository)
    {
        $this->pokemonRepository = $pokemonRepository;
    }

    public function show($pokemonName)
    {
        $pokemon = $this->pokemonRepository->getPokemon($pokemonName);

        if ($pokemon) {
            return response()->json($pokemon);
        } else {
            return response()->json(['error' => 'Pokemon não encontrado'], 404);
        }
    }

    public function searchForm()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $pokemonName = $request->input('pokemonName');
        $pokemon = $this->pokemonRepository->getPokemon($pokemonName);

        return view('search', ['pokemon' => $pokemon]);
    }
}

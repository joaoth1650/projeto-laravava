<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function listUser(int $user)
   {
      $user = User::where('id', $user)->first();
      return view('listUser', ['user' => $user]);
   }
   public function listAllUsers()
   {
      $users = User::all();
      return view('listAllUsers', ['users' => $users]);
   }
   public function formAddUser()
   {
      return view('newUser');
   }
   public function storeNewUser(Request $request)
   {
      $request->validate([
          'nome' => 'required|min:6',
          'email' => 'required|email',
          'senha' => 'required|min:6',
      ], [
         'nome.required' => 'O campo nome é obrigatório.',
         'nome.min' => 'O nome deve ter no mínimo :min caracteres.',
         'email.required' => 'O campo email é obrigatório.',
         'email.email' => 'O email deve ser um endereço de email válido.',
         'senha.required' => 'O campo senha é obrigatório.',
         'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
     ]
   );

      User::query()->create([
          'name' => $request->nome,
          'email' => $request->email,
          'password' => bcrypt($request->senha),
      ]);

      return redirect()->route('newUser')->with('success', 'Cadastro realizado com sucesso!');
  }
}

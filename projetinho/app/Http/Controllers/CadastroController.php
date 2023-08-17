<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Certifique-se de importar o modelo User

class CadastroController extends Controller
{
    public function registrar(Request $request)
    {
        // Validação dos dados do formulário
        $this->validate($request, [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:6',
        ]);

        // Criação do novo usuário
        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->senha),
        ]);

        // Redireciona após o registro (ajuste conforme sua necessidade)
        return redirect('/')->with('status', 'Usuário registrado com sucesso!');
    }
    public function view() 
    {
        return view('cadastro');
    }
}

   // public function createUser()
   // {
   //    $user = new User();
   //    $user->name = "João";
   //    $user->email = "joao@joao";
   //    $user->password = hash("sha256", "123");
   //    $user->save();
   //    echo "<h1>Lista users</h1>";
   // }

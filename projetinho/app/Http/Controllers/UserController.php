<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function listUser()
   {
        // $user = new User();
        // $user->name = "João";
        // $user->email = "joao@joao";
        // $user->password = hash("sha256", "123");
        // $user->save();
        // echo "<h1>Lista users</h1>" ;
        $user = User::where('id', 1)->first();
        return view('listUsers', ['user' => $user]);
   }
}

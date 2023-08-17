<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function createUser()
   {
      $user = new User();
      $user->name = "João";
      $user->email = "joao@joao";
      $user->password = hash("sha256", "123");
      $user->save();
      echo "<h1>Lista users</h1>";
   }
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
}

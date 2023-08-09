<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FristController extends Controller
{
    public function listUser() 
    {
       // CONCEITO => return view|| vision ('routeForSearchMethod', ['nameVariable'=>'contentForBlade?+']);
        return view( 'joao/test', ['joao'=> 'suuuuuusAuth']) ;
    }
}

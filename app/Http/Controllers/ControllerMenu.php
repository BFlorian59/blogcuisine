<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMenu extends Controller
{
    public function menu (){
        // Your logic
         return view('recipe/menu');
     
      }
}

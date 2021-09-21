<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBrunch extends Controller
{
    public function brunch (){
        // Your logic
         return view('recipe/brunch');
     
      } 
}

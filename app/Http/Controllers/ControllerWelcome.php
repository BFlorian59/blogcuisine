<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerWelcome extends Controller
{
    public function welcome (){
         // Your logic
          return view('welcome');
      
       } 
 }

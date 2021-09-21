<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poulet extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}

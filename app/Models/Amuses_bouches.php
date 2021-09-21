<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amuses_bouches extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}

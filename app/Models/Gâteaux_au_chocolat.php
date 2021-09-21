<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gâteaux_au_chocolat extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}

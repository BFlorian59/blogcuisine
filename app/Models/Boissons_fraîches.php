<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boissons_fraîches extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boissons_chaudes extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}

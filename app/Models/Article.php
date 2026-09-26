<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Abilitiamo il salvataggio dei tre campi nel database MySQL
    protected $fillable = ['title', 'subtitle', 'body'];
}

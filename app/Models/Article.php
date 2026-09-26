<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Abilitiamo il salvataggio dei campi, incluso il nuovo user_id
    protected $fillable = ['title', 'subtitle', 'body', 'user_id'];

    // Relazione One-to-Many: L'articolo appartiene a un utente specifico
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    //
    protected $fillable = [
        'titre', 'isbn', 'auteur', 'photo', 'stock'
    ];

    public function users() {
        return $this->hasOne(Emprunts::class);
    }
}

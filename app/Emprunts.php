<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunts extends Model
{

    protected $fillable = [
        'date_location', 'fin_location', 'date_rendue'
    ];

    public function emprunteur() {
        return $this->hasOne(User::class, 'emprunts');
    }
    
    public function livre() {
        return $this->hasOne(Livres::class, 'emprunts');
    }

}

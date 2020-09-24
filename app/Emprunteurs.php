<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunteurs extends Model
{
    //
    public function emprunter() {
        return $this->hasMany(Emprunts::class, 'emprunts');
    }

}

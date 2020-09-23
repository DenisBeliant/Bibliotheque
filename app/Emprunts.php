<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunts extends Model
{
    //
    public function emprunts() {
        return $this->hasOne('App\User');
    }
}

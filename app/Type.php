<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    public function publication(){
        return $this->hasMany(Publication::class);
    }
}

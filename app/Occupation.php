<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function publication(){
        return $this->hasMany(Publication::class);
    }

}

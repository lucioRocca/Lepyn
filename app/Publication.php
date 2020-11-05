<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    protected $fillable = ['title', 'text', 'telephone', 'image', 'occupation_id', 'type_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function occupation(){
        return $this->belongsTo(Occupation::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

}

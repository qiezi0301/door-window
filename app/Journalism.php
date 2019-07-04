<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journalism extends Model
{
    public function newType()
    {
        return $this->belongsTo(NewType::class,'tid','id');
    }
}

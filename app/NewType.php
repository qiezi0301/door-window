<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewType extends Model
{
    public function journalisms()
    {
        return $this->hasMany(Journalism::class,'tid','id');
    }
}

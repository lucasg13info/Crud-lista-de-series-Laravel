<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

Class Serie extends Model{
    public $timestamps = false;

    public function temporadas(){
        return $this->hasMany(Temporada::class);
    }
}
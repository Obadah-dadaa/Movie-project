<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;
class Language extends Model
{
         public function movie(){

        return $this->hasMany(Movie::class);
    }

}

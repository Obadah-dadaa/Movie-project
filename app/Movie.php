<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;
use App\ProducingYear;
class Movie extends Model
{
    public function language(){

        return $this->belongsTo(Language::class);
    }
    public function year(){

        return $this->belongsTo(ProducingYear::class);
    }

}


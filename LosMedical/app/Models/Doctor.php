<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function phones(){
        return $this->hasMany(Phone::class);
    }

    public function profesions(){
        return $this->belongsToMany(Profesion::class);
    }
}

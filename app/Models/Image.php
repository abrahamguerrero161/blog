<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //relacion polimorfica

    protected $fillable = ['url'];

    public function imagiable(){

        return $this->morphTo();
    }
}

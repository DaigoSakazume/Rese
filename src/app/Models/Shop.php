<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'area_id',
        'genre_id',
        'description',
        'image_url',
    ];

    public function genres(){
        return $this->hasMany('App\Models\Genre');
    }

    public function ares(){
        return $this->hasMany('App\Models\Ares');
    }
}

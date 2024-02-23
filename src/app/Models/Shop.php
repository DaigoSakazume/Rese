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

    public function reservation(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area', 'area_id');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre', 'genre_id');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function scopeAreaSearch($query, $area_id)
    {
        if (!empty($area_id)) {
            $query->where('area_id', $area_id);
        }
    }

    public function scopeGenreSearch($query, $genre_id)
    {
        if (!empty($genre_id)) {
            $query->where('genre_id', $genre_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    //
    
    protected $table = 'songs';

    protected $fillable = [
        'title', 'lyrics'
    ];

    protected $primaryKey = 'id';

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    // public function getLyricsAttribute($value)
    // {
    //     if(strlen($value) >= 50)
    //     {
    //         return substr($value, 0, 50)  . '..';
    //     }
    //     return $value;
    // }
}

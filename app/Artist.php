<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // const CREATED_AT = 'date_created';
    // const UPDATED_AT = 'date_updated';

    protected $table = 'artists';

    protected $fillable = [
        'name'
    ];

    protected $primaryKey = 'id';


    public function songs()
    {
        return $this->hasMany('App\Songs');
    }
}

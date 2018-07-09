<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['car_id', 'url'];

    public function product()
    {
        return $this->belongsTo('App\Car');
    }
}

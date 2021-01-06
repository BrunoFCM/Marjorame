<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    // Don't add create and update timestamps in database.
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $table = 'city';

}


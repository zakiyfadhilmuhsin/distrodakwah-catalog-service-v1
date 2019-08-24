<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    // use Authenticatable, Authorizable;

    protected $table = 'brands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}

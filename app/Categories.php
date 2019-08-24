<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // use Authenticatable, Authorizable;

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}

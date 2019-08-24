<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkuValues extends Model
{
    protected $table = 'sku_values';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku_id', 'product_id', 'option_id', 'value_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}

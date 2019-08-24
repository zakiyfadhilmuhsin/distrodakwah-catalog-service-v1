<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSkus extends Model
{
    protected $table = 'product_skus';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'sku', 'price', 'stock'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function option_values()
    {
        return $this->belongsToMany(OptionValues::class, 'sku_values', 'sku_id', 'value_id')->withPivot('product_id', 'option_id');
    }

    // public function products()
    // {
    //     return $this->belongsTo(Products::class, 'product_id', 'id');
    // }

    // public function options()
    // {
    //     return $this->hasMany(Options::class, 'product_variant_id', 'id');
    // }
}

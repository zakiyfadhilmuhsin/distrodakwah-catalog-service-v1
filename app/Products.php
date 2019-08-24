<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // use Authenticatable, Authorizable;

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'product_description', 'featured_image', 'price', 'cogs', 'sku', 'weight', 'tags', 'product_type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // public function product_variants()
    // {
    //     return $this->hasMany(ProductVariants::class, 'product_id', 'id');
    // }

    public function options()
    {
        return $this->hasMany(Options::class, 'option_id', 'id');
    }
}

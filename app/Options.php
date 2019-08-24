<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    // use Authenticatable, Authorizable;

    protected $table = 'options';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'option_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // public function product_variants()
    // {
    //     return $this->belongsTo(ProductVariants::class, 'product_variant_id', 'id');
    // }

    public function products()
    {
        return $this->belongsTo(ProductVariants::class, 'product_id', 'id');
    }

    public function option_values()
    {
        return $this->hasMany(OptionValues::class, 'option_id', 'id');
    }
}

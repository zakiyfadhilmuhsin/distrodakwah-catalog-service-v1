<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValues extends Model
{
    // use Authenticatable, Authorizable;

    protected $table = 'option_values';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value_name', 'option_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function options()
    {
        return $this->belongsTo(Options::class, 'option_id', 'id');
    }

    public function product_skus()
    {
        return $this->belongsToMany(ProductSkus::class, 'sku_values', 'value_id', 'sku_id')->withPivot('product_id','option_id');
    }

}

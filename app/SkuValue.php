<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkuValue extends Model
{
    protected $table = "sku_values";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku_id', 'product_id', 'option_id', 'value_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function option()
    {
        return $this->belongsTo('App\Option');
    }

    public function option_value()
    {
        return $this->belongsTo('App\OptionValue');
    }

    public function product_sku()
    {
        return $this->belongsTo('App\ProductSku');
    }

}

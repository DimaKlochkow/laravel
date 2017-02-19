<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}

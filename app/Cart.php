<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // protected $table = 'users';
    protected $guarded =[];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

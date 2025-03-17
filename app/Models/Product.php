<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'id_product', 'id_order')
            ->withPivot('quantity', 'total_price');
    }
}

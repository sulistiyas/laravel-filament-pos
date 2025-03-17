<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';
    protected $primaryKey = 'id_inventory';
    protected $fillable = ['id_product', 'stock', 'stock_min', 'stock_max'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}

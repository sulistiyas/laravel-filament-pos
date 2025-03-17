<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    protected $fillable = ['id_customer', 'order_date', 'total', 'status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id_order', 'id_order');
    }

    public function details()
    {
        return $this->hasMany(OrderItem::class, 'id_order', 'id_order');
    }
}

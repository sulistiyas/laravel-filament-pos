<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id_customer';
    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_customer', 'id_customer');
    }
}

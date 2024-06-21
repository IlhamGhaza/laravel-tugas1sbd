<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';
    protected $fillable = ['order_date', 'total_price', 'discount', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(customers::class, 'customer_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(order_details::class, 'order_id');
    }

    public function delivery()
    {
        return $this->hasOne(deliveries::class, 'order_id');
    }

    public function payment()
    {
        return $this->hasOne(payments::class, 'order_id');
    }
}

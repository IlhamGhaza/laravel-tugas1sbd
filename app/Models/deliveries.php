<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deliveries extends Model
{
    use HasFactory;

    protected $primaryKey = 'delivery_id';
    protected $fillable = ['order_id', 'delivery_address', 'delivery_date'];

    public function order()
    {
        return $this->belongsTo(orders::class, 'order_id');
    }
}

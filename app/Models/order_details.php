<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;

    protected $primaryKey = 'detail_id';
    protected $fillable = ['order_id', 'arrangement_id', 'quantity', 'unit_price', 'subtotal'];

    public function order()
    {
        return $this->belongsTo(orders::class, 'order_id');
    }

    public function flowerArrangement()
    {
        return $this->belongsTo(flower_arrangements::class, 'arrangement_id');
    }
}

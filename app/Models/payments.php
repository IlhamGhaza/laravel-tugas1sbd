<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;

    protected $primaryKey = 'payment_id';
    protected $fillable = ['order_id', 'payment_date', 'total_payment'];

    public function order()
    {
        return $this->belongsTo(orders::class, 'order_id');
    }
}

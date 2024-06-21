<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\order_details;


class flower_arrangements extends Model
{
    use HasFactory;
    protected $primaryKey = 'arrangement_id';
    protected $fillable = ['type', 'description','size', 'price'];

    public function orderDetails()
    {
        return $this->hasMany(order_details::class, 'arrangement_id');
    }
}

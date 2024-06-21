<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customers extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_id';
    protected $fillable = ['name', 'address', 'phone', 'status'];

    public function orders()
    {
        return $this->hasMany(orders::class, 'customer_id');
    }
}

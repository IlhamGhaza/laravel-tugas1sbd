<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courier extends Model
{
    use HasFactory;

    protected $primaryKey = 'courier_id';
    protected $fillable = ['name', 'contact'];

    public function orders()
    {
        return $this->hasMany(orders::class, 'courier_id');
    }
}



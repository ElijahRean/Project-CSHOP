<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
    use HasFactory;

    protected $fillable = ['user_id', 'total', 'name',
    'last_name', 'phone', 'addressone', 'addresstwo', 'city',
    'country', 'zip'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }


}



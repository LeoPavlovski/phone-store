<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable=[
        'order_id',
        'phone_id',
        'user_id',
        'quantity',
        'price',
        'tax'
    ];
    public function phone()
    {
        return $this->belongsTo(Phone::class , 'phone_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}

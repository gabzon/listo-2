<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subtotal',
        'total_amount',
        'vat',
        'discount_code',
        'discount',
        'method',
        'comments',
        'status',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subtotal' => 'decimal',
        'total_amount' => 'decimal',
        'vat' => 'decimal',
        'discount_code' => 'decimal',
        'discount' => 'decimal',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}

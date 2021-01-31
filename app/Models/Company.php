<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
        'website',
        'logo',
        'employees',
        'has_branches',
        'has_insurance',
        'has_newsletter',
        'is_active',
        'founded',
        'defunct',
        'street_address',        
        'address_info',
        'postal_code',
        'city',
        'state',
        'country',
        'lat',
        'lng',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'snapchat',
        'blog',
        'skype',
        'pinterest',
        'youtube',
        'status',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'has_branches' => 'boolean',
        'has_insurance' => 'boolean',
        'has_newsletter' => 'boolean',
        'is_active' => 'boolean',
        'lat' => 'decimal:8',
        'lng' => 'decimal:8',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'founded',
        'defunct',
    ];
}

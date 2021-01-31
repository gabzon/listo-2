<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'shortname',
        'slug',
        'domain',
        'alpha_2_Code',
        'alpha_3_Code',
        'phone_code',
        'capital',
        'region',
        'subregion',
        'currency_code',
        'currency_name',
        'currency_symbol',
        'flag',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function scopeRegion($query, $region)
    {               
        if(!Empty($region)){            
            return $query->where('region', $region);
        }
        return $query;
    }
}





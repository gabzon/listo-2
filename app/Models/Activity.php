<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Activity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'icon',
        'image',
        'season',
        'context',
        'is_indoor',
        'is_outdoor',
        'is_paid',
        'is_free',
        'training',
        'companion',
        'day_period',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeCompanion($query, $companion)
    {
        if (!empty($companion)) {                     
            return $query->where('companion','LIKE', '%' . $companion . '%');                            
        }
        return $query;
    }

    public function scopeIsFree($query, $free)
    {
        if (!empty($free)) {            
            return $query->where('is_free', true);                
        }
        return $query;
    }

    public function scopeIsIndoor($query, $indoor)
    {
        if (!empty($indoor)) {            
            return $query->where('is_indoor', true);                
        }
        return $query;
    }

    public function scopeIsOutdoor($query, $outdoor)
    {
        if (!empty($outdoor)) {            
            return $query->where('is_outdoor', true);                
        }
        return $query;
    }

    public function scopeLocation($query, $location)
    {           
        if (!empty($location)) {                  
            if ($location == 'indoor') {                
                return $query->where('is_indoor', true);                 
            }  
            if ($location == 'outdoor') {
                return $query->where('is_outdoor', true); 
            }                       
        }
        return $query;
    }

    public function scopeSeason($query, $season)
    {        
        if (!empty($season)) {                    
            return $query->where('season', 'LIKE', '%'.$season.'%');                            
            // return in_array($season, explode(',',$this->season));
        }
        return $query;
    }

    public function scopeCategory($query, $category)    
    {                
        if (!empty($category)) {                       
            return $query->whereHas('categories', function (Builder $query_category) use ($category) {
                $query_category->where('category_id', $category);
            });                        
        }
        return $query;
    }

    public function getDisplayPricingAttribute()
    {
        if ($this->is_free && $this->is_paid) {
            return 'Free | Paid';
        }
        if ($this->is_free) {
            return 'Free';
        }
        if ($this->is_paid) {
            return 'Paid';
        }
        return '-';
    }

    public function getDisplayLocationAttribute()
    {
        if ($this->is_indoor && $this->is_outdoor) {
            return 'Both';
        }
        if ($this->is_indoor) {
            return 'Indoor';
        }
        if ($this->is_outdoor) {
            return 'Outdoor';
        }
        return '-';
    }

    public function getCompanionArrayAttribute()
    {
        return explode(',', $this->companion);
    }

    public function getSeasonArrayAttribute()
    {
        return explode(',', $this->season);        
    }
}

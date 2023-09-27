<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Homepage
 *
 * @property $id
 * @property $crafts_recommendation
 * @property $login
 * @property $register
 * @property $premium_plan
 * @property $places_section
 * @property $categories
 * @property $interactive_maps
 * @property $crafts
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @property InteractiveMap[] $interactiveMaps
 * @property PlacesSection[] $placesSections
 * @property PremiumPlan[] $premiumPlans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Homepage extends Model
{
    
    static $rules = [
		'crafts_recommendation' => 'required',
		'login' => 'required',
		'register' => 'required',
		'premium_plan' => 'required',
		'places_section' => 'required',
		'categories' => 'required',
		'interactive_maps' => 'required',
		'crafts' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['crafts_recommendation','login','register','premium_plan','places_section','categories','interactive_maps','crafts'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'homepages_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interactiveMaps()
    {
        return $this->hasMany('App\Models\InteractiveMap', 'homepages_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function placesSections()
    {
        return $this->hasMany('App\Models\PlacesSection', 'homepages_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function premiumPlans()
    {
        return $this->hasMany('App\Models\PremiumPlan', 'homepages_id', 'id');
    }
    

}

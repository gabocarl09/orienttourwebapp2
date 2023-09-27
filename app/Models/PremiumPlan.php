<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PremiumPlan
 *
 * @property $id
 * @property $plan_name
 * @property $price
 * @property $characteristics
 * @property $text
 * @property $homepages_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Homepage $homepage
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PremiumPlan extends Model
{
    
    static $rules = [
		'plan_name' => 'required',
		'price' => 'required',
		'characteristics' => 'required',
		'text' => 'required',
		'homepages_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['plan_name','price','characteristics','text','homepages_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function homepage()
    {
        return $this->hasOne('App\Models\Homepage', 'id', 'homepages_id');
    }
    

}

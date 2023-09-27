<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InteractiveMap
 *
 * @property $id
 * @property $shop_names
 * @property $location
 * @property $type_of_shop
 * @property $homepages_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Homepage $homepage
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InteractiveMap extends Model
{
    
    static $rules = [
		'shop_names' => 'required',
		'location' => 'required',
		'type_of_shop' => 'required',
		'homepages_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['shop_names','location','type_of_shop','homepages_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function homepage()
    {
        return $this->hasOne('App\Models\Homepage', 'id', 'homepages_id');
    }
    

}

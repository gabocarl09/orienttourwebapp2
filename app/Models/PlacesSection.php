<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlacesSection
 *
 * @property $id
 * @property $place_image
 * @property $type_of_place
 * @property $homepages_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Homepage $homepage
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PlacesSection extends Model
{
    
    static $rules = [
		'place_image' => 'required',
		'type_of_place' => 'required',
		'homepages_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['place_image','type_of_place','homepages_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function homepage()
    {
        return $this->hasOne('App\Models\Homepage', 'id', 'homepages_id');
    }
    

}

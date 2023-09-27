<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $category_name
 * @property $pictures
 * @property $homepages_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Craft[] $crafts
 * @property Homepage $homepage
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'category_name' => 'required',
		'pictures' => 'required',
		'homepages_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_name','pictures','homepages_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function crafts()
    {
        return $this->hasMany('App\Models\Craft', 'categories_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function homepage()
    {
        return $this->hasOne('App\Models\Homepage', 'id', 'homepages_id');
    }
    

}

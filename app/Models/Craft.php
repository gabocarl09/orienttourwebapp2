<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Craft
 *
 * @property $id
 * @property $craft_name
 * @property $craft_image
 * @property $price
 * @property $categories_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Craft extends Model
{
    
    static $rules = [
		'craft_name' => 'required',
		'craft_image' => 'required',
		'price' => 'required',
		'categories_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['craft_name','craft_image','price','categories_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
    

}

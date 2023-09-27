<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InteractiveMaps extends Model
{
    protected $table='interactive_maps';
    
    protected $fillable = [
        'id','shop_names','location','type_of_shop','homepages_id'
    ];

    protected $guarded = [
        // Lista para proteger todos os campos
    ];
}

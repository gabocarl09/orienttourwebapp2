<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'id_user',
        'id_category',
    ];

    //funciones para el modelo
    public function getUserFirstAndLastNameAttribute()
    {
        $firstName = explode(' ', $this->user->name)[0];
        $lastName = explode(' ', $this->user->last_name)[0];

        return $firstName . ' ' . $lastName;
    }

    //relaciones del modelo
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relacion con el usuario
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id_user');
    // }
}

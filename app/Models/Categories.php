<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        // Lista de campos de la migracion
    ];

    protected $guarded = [
        // Lista para proteger todos os campos
    ];
}

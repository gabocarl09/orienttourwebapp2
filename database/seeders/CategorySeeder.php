<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryData = [
            [
                'name' => 'Llaveros',
                'picture' => 'images/category/Llaveros.png',
            ],
            [
                'name' => 'Jarrones',
                'picture' => 'images/category/Jarrones.png',
            ],
            [
                'name' => 'Collares',
                'picture' => 'images/category/Collares.png',
            ],
            [
                'name' => 'Tazas',
                'picture' => 'images/category/Tazas.png',
            ],
            [
                'name' => 'Precolombinas',
                'picture' => 'images/category/Piezas_precolombinas.png',
            ],
            [
                'name' => 'Otros...',
                'picture' => 'images/category/Otros.png',

            ],
        ];

        foreach ($categoryData as $data) {
            Category::create([
                'name' => $data['name'],
                'picture' => $data['picture'],
            ]);
        }
        // php artisan db:seed --class=CategorySeeder
    }
}

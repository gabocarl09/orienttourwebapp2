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
                'picture' => 'images/Llaveros.png',
            ],
            [
                'name' => 'Jarrones',
                'picture' => 'images/Jarrones.png',
            ],
            [
                'name' => 'Collares',
                'picture' => 'images/Collares.png',
            ],
            [
                'name' => 'Tazas',
                'picture' => 'images/Tazas.png',
            ],
            [
                'name' => 'Precolombinas',
                'picture' => 'images/Piezas_precolombinas.png',
            ],
            [
                'name' => 'Otros...',
                'picture' => 'images/Otros.png',
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

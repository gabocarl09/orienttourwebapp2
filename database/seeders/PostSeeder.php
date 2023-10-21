<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postData = [
            [
                'name' => 'Jarron',
                'description' => 'Description 1',
                'image' => '/images/posts/Jarrón 1.png',
                'quantity' => 3,
                'price' => 30,
                'id_category' => 2,
            ],
            [
                'name' => 'Collar',
                'description' => 'Description 2',
                'image' => '/images/posts/Collar.png',
                'quantity' => 3,
                'price' => 100,
                'id_category' => 3,
            ],
            [
                'name' => 'Otros',
                'description' => 'Description 3',
                'image' => '/images/posts/Precolombino1.png',
                'quantity' => 5,
                'price' => 80,
                'id_category' => 5,
            ],
            [
                'name' => 'Taza',
                'description' => 'Description 4',
                'image' => '/images/posts/Taza.png',
                'quantity' => 4,
                'price' => 20,
                'id_category' => 4,
            ],
            [
                'name' => 'Precolombino',
                'description' => 'Description 5',
                'image' => '/images/posts/Precolombino2.png',
                'quantity' => 3,
                'price' => 100,
                'id_category' => 5,
            ],
            [
                'name' => 'Jarron',
                'description' => 'Description 6',
                'image' => '/images/posts/Jarrón 2.png',
                'quantity' => 3,
                'price' => 60,
                'id_category' => 2,
            ],
            [
                'name' => 'Llavero',
                'description' => 'Description 7',
                'image' => '/images/posts/llavero.png',
                'quantity' => 5,
                'price' => 40,
                'id_category' => 1,
            ],
            [
                'name' => 'Jarron',
                'description' => 'Description 8',
                'image' => '/images/posts/Jarrón 3.png',
                'quantity' => 5,
                'price' => 60,
                'id_category' => 2,
            ],
        ];


        foreach ($postData as $post) {
            \App\Models\Post::create($post);
        }

        //ejecutar el seeder
        //php artisan db:seed --class=PostSeeder
    }
}

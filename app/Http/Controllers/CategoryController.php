<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile;
        $categories = Category::all();

        // Crear un array para almacenar el recuento de posts por categoría
        $categoryCounts = [];

        // Recorrer todas las categorías y contar los posts asociados
        foreach ($categories as $category) {
            $count = Post::where('id_category', $category->id)->count();
            // Aplicar htmlspecialchars al nombre de la categoría antes de almacenarlo en el array
            $categoryName = htmlspecialchars($category->name);
            $categoryCounts[$categoryName] = $count;
        }

        return view('category/index', compact('categories'));
    }

    public function show($name)
    {
        // $user = Auth::user();
        // $profile = $user->profile;
        $category = Category::where('name', $name)->firstOrFail();
        $posts = Post::where('id_category', $category->id)->get();

        return view('category/show', compact('category', 'posts'));
    }
}

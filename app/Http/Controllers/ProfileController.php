<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

     public function index($user_id = null)
     {
         if ($user_id === null) {
             // Obtener el usuario autenticado
             $user = Auth::user();
         } else {
             // Obtener el usuario según el $user_id proporcionado
             $user = User::find($user_id);
         }

         if ($user === null) {
             // Manejo de error si el usuario no se encuentra
             // Puedes redirigir o mostrar un mensaje de error
             return redirect()->route('index/profile')->with('error', 'Usuario no encontrado');
         }

        // $profile = $user->profile;
        // $posts = Post::latest()->where('id_user', $user->id)->get();

        return view('profile.index');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

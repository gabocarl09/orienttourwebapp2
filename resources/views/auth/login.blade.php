@extends('layouts.app')

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="cont_form">
        <form method="POST" action="{{ route('login') }}" class="formLogin">
            <div class="orientourLogo">
                <img src="images/ORIENTTOUR.png" alt="">
            </div>

            <h1>Inicio de sesión</h1>
            @csrf
            <!-- Email Address -->
            <div>
                <!-- <x-input-label for="email" :value="__('Email')" /> -->
                <x-text-input id="email" class="block mt-1 w-full input_login" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Correo Electronico"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full input_login"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Contraseña"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->
            <div class="requestPass">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900
                        rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2
                        focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu Contraseña?') }}
                </a>
            @endif
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3 btn-login">
                    {{ __('Iniciar Sesión') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

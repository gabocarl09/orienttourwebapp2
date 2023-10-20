
@include('layouts.app')


    <!-- Session Status -->
    <div class="cont_form">
        <form method="POST" action="{{ route('login') }}" class="formLogin">
            <div class="orientourLogo">
                <img src="images/ORIENTTOUR.png" alt="">
            </div>

            <h1>Inicio de sesión</h1>
            @csrf
            <!-- Email Address -->
            <div class="input_login">
                <input id="email" type="text" class="form-control regist_input @error('name') is-invalid @enderror" id="email" type="email" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="input_login">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required
                autocomplete="current-password" placeholder="Contraseña" autofocus>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <!-- Remember Me -->

            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

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
                <button class="ml-3 btn-login">
                    {{ __('Iniciar Sesión') }}
                </button>
            </div>

            <div class="regist_account">
                <p>No tienes una cuenta?</p>
                <a href="{{ route('register') }}">Registrarse</a>
            </div>
        </form>
    </div>


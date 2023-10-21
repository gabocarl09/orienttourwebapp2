@include('layouts.app')

<div class="cont_form">
        <form method="POST" action="{{ route('register') }}" class="formLogin">
            @csrf
                <div class="orientourLogo">
                    <img src="images/ORIENTTOUR.png" alt="">
                </div>
                <div class="formLogin_register">
                    <div class="formLogin_register_space">
                        <input id="name" type="text" class="form-control inputChiquito @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre " autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="formLogin_register_space">
                        <input id="last_name" type="text" class="form-control inputChiquito @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"  placeholder="Apellido" autofocus>
                        @error('last_name')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="regist_input">
                    <input id="email" type="text" class="form-control inputChiquito @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Correo electronico" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="regist_input">
                    <input id="password" type="password" class="form-control regist_input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Contraseña" autofocus>
                    @error('password')                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="regist_input">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña" autofocus>
                </div>

                <div class="regist_btn">
                    <button type="submit" >
                        Iniciar sesión
                    </button>
                    <button type="submit" class="">
                        {{ __('Registrarse') }}
                    </button>
                </div>
        </form>

    </div>
</div>


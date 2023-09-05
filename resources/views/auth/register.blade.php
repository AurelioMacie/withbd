@extends('voyager::auth.master')

@section('content')
    <div class="login-container">

        <h4>Criar uma conta</h4>

        <form class="theme-form login-form" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group form-group-default">
                            <label>Nome</label>

                            <div class="small-group">
                                <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                    <input class="form-control @error('name') is-invalid @enderror"  type="text" placeholder="First name" name="name" :value="old('name)" required autocomplete="name">
                                    @error('name')
                                    <div class="show-hide">
                                    <span class="show" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span></div>

                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Endereço de E-mail</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control @error('email') is-invalid @enderror"  type="email" placeholder="Test@gmail.com" name="email" :value="old('email)" required autofocus>
                                @error('email')
                                <div class="show-hide">
                                    <span class="show" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span></div>

                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Senha</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" placeholder="*********" :value="old('password')">
                                @error('password')
                                <div class="show-hide">
                                    <span class="show" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Confirmar Senha</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required="" placeholder="*********" :value="old('password_confirmation')">
                                @error('password_confirmation')
                                <div class="show-hide">
                                    <span class="show" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>

                        </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Concordar com <span>Política de Privacidade                  </span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Criar sua Conta</button>
                            </div>
                            <p>Já está registado? <a class="ms-2" href="/gestao/login">Entra na sua Conta</a></p>
                    </form>

        <div style="clear:both"></div>

        @if(!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div> <!-- .login-container -->
@endsection

@section('post_js')

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });

    </script>
@endsection

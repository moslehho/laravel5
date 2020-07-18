@include('Backend.header')

<body class="login">
<div class="login_wrapper">
    <div>
        <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>{{ __('Register') }}</h1>

                <div>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{ __('username') }}" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>


                <div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>



                <div>
                    <input type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>



                <div>
                    <input type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div>
                    <input type="password" placeholder="{{ __('Confirm Password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                </div>


                <div>
                    <input type="phone" placeholder="{{ __('phone') }}" class="form-control" name="phone" required autocomplete="phone" />
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">در حال حاضر عضو هستید؟
                        <a href="{{url('login')}}" class="to_register"> ورود </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />


                </div>
            </form>
        </section>
    </div>
</div>
</body>

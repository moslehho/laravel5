@include('Backend.header')

<body class="login">


<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>فرم ورود</h1>
                <div>
                    <input type="text" class="form-control" placeholder="ایمیل"
                           @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="رمز عبور"
                           @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <a class="reset_pass" href="{{ route('password.request') }}">رمز ورود را از دست دادید؟</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">جدید در سایت؟
                        <a href="{{url('register')}}" class="to_register"> ایجاد حساب </a>
                    </p>

                    <div class="clearfix"></div>
                    <br/>


                </div>
            </form>
        </section>
    </div>


</div>


</body>

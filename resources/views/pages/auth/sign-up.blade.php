@extends('layouts.auth')

@section('body')
<section class="bg-gray vh-100">
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto me-0">
                <div class="d-none d-lg-block">
                    <h2> Join CodeConnect, Solve Code Together </h2>
                    <p>
                        At CodeConnect, we empower future developers with a dedicated platform for collaboration, knowledge sharing, and support. Join us to discuss programming, solve problems, and grow your skills in a safe, inclusive space for Gunadarma University's Information System majors.
                    </p>
                </div>
                <div class="d-block d-lg-none">
                    Buat akun anda dan mari berdiskusi
                </div>
            </div>
            <div class="col-12 col-lg-3 h-100">
                <a href="#" class="nav-link mb-6 text-center">
                    <img src=" {{ url('assets/images/logobiru.png')}}" alt="diskusi logi" class="h-32px">
                </a>
                <div class="card mb-5">
                    <form action="{{ route('auth.sign-up.sign-up') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                id="email" autocomplete="off" autofocus
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                <span class="input-group-text bg-white border-start-0 pe-auto
                                    @error('password') border-danger rounded-end @enderror">
                                    <a href="javascript:;" id="password-toggle">
                                        <img src="{{ url('assets/images/eye-slash.png') }}" alt="Password toggle" id="password-toggle-img">
                                    </a>
                                </span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" 
                                id="username" autocomplete="off" name="username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary rounded-2">Sign up</button>
                        </div>
                    </form>

                </div>
                <div class="text-center">
                    Already have an account?  <a href="{{ route('auth.login.show') }}"><u>Log in</u></a>
                </div>
            </div>
        </div>
    </div>

</section>
    
@endsection

@section('after-script')
    <script>
        var isPasswordRevealed = false;

        $('#password-toggle').on('click', function() {
            isPasswordRevealed = !isPasswordRevealed;

            if (isPasswordRevealed) {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye.png') }}");
                $('#password').attr('type', 'text');
            }
            else {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}");
                $('#password').attr('type', 'password');
            }
        })
    </script>
@endsection
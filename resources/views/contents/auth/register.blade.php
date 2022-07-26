@extends('templates.auth')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <div class="text-center">
                    <img src="/assets/img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132"
                        height="132" />
                </div>
                <form action="{{ route('register.custom') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control form-control-lg" type="text" name="name"
                            placeholder="Enter your email or name" />
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="text" name="email"
                            placeholder="Enter your email or name" />
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                            placeholder="Enter your password" />
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div>
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                            <span class="form-check-label">
                                Remember me next time
                            </span>
                        </label>
                    </div>
                    <div class="text-center mt-3">
                        {{-- <a href="" class="btn btn-lg btn-primary">Sign in</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script src="/assets/js/services/service-helper.js"></script>
    <script src="/assets/js/services/service-auth.js"></script>
    <script>
        let auth = new Auth();

        $('form#login').on('submit', function (e) {
            e.preventDefault();
            let data = new FormData(this)
            auth.login(data);
        })
    </script>
@endpush

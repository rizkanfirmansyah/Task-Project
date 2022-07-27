@extends('templates.home')

@section('main_content')
    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center" style="max-height: 200px">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-12 align-items-center order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Daftar Wajib Pajak</h2>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->


        <!-- ======= About Us Section ======= -->
        <section id="register" class="about pt-0 mt-5">
            <div class="container" data-aos="fade-up">

                <form action="{{route('register.custom')}}" method="POST">
                    @csrf
                    <div class="card shadow p-5 col-lg-6 mx-auto">
                        <h1 class="text-center mb-5">Daftar </h1>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control px-3 py-3" id="name"
                                        placeholder="Your username">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control px-3 py-3" name="email" id="email"
                                        placeholder="Your Email">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input type="password" name="password" class="form-control px-3 py-3" id="password"
                                        placeholder="Your password">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="password" class="form-control px-3 py-3" name="password_confirmation"
                                        id="password_confirmation" placeholder="Your repeat password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                                <a class="text-secondary text-small" href="#">Forgot password?</a>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center mt-5">
                                <a class="text-secondary text-small">Sudah punya akun? </a> <a href="{{ route('login') }}"> Login</a>
                            </div>
                        </div>
                    </form>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->

@endsection
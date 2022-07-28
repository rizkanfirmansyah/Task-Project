@extends('templates.home')

@section('main_content')
    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center" style="max-height: 200px">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-12 align-items-center order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Login Wajib Pajak</h2>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->


        <!-- ======= About Us Section ======= -->
        <section id="login" class="about pt-0 mt-5">
            <div class="container" data-aos="fade-up">

                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="card shadow p-5 col-lg-6 mx-auto">
                        <h1 class="text-center mb-5">Login </h1>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0 w-100">
                                    <input type="email" class="form-control px-3 py-3" name="email" id="email"
                                        placeholder="Your Email">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group w-100">
                                    <input type="password" name="password" class="form-control px-3 py-3" id="password"
                                        placeholder="Your password">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                <a class="text-secondary text-small" href="#">Forgot password?</a>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center mt-5">
                                <a class="text-secondary text-small">Belum punya akun? </a> <a href="{{ route('homepage-register') }}"> Daftar</a>
                            </div>
                    </div>
                </form>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->
@endsection
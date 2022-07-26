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

                <div class="card shadow p-5 col-lg-6 mx-auto">
                    <h1 class="text-center mb-5">Daftar </h1>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="username" class="form-control px-3 py-3" id="username"
                                    placeholder="Your username">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control px-3 py-3" name="email" id="email"
                                    placeholder="Your Email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <input type="password" name="password" class="form-control px-3 py-3" id="password"
                                    placeholder="Your password">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="password" class="form-control px-3 py-3" name="repeat password"
                                    id="repeat password" placeholder="Your repeat password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                            <a class="text-secondary text-small" href="#">Forgot password?</a>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center mt-5">
                            <a class="text-secondary text-small">Sudah punya akun? </a> <a href="#"> Login</a>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->
@endsection

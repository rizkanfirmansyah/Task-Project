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
                    <h1 class="text-center mb-5">Lengkapi form dibawah </h1>
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card p-3 text-center button-wizard border-primary" id="wizard-btn-1"
                                style="cursor: pointer"><i class="fa-regular text-primary fa-address-card fa-3x"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 text-center button-wizard" id="wizard-btn-2" style="cursor: pointer"><i
                                    class="fa-regular text-secondary fa-address-card fa-3x"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 text-center button-wizard" id="wizard-btn-3" style="cursor: pointer"><i
                                    class="fa-regular text-secondary fa-address-card fa-3x"></i>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 text-center button-wizard" id="wizard-btn-4" style="cursor: pointer"><i
                                    class="fa-regular text-secondary fa-address-card fa-3x"></i>
                            </div>
                        </div>
                    </div>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div id="form-1" class="form-wizard">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="username" class="form-control px-3 py-3" id="username"
                                        placeholder="Your username">
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
                        </div>
                        <div id="form-2" class="d-none form-wizard">
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
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="password" class="form-control px-3 py-3" name="repeat password"
                                        id="repeat password" placeholder="Your repeat password">
                                </div>
                            </div>
                        </div>
                        <div id="form-3" class="d-none form-wizard">
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
                            </div>
                        </div>
                        <div id="form-4" class="d-none form-wizard">
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
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button type="button" id="btn-back" value="1"
                                class="d-none btn btn-lg btn-secondary">Back</button>
                            <button type="button" id="btn-next" class="btn btn-lg btn-primary"
                                value="1">Next</button>
                            <button type="submit" id="btn-submit" class="btn btn-lg btn-primary d-none">Submit</button>
                        </div>
                        <hr>
                    </form>
                </div>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->
@endsection

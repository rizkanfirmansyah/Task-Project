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
                        <div class="col">
                            <div class="card p-3 text-center button-wizard" id="wizard-btn-5" style="cursor: pointer"><i
                                    class="fa-regular text-secondary fa-address-card fa-3x"></i>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('register.information') }}" method="POST" role="form">
                        @csrf
                        <div id="form-1" class="form-wizard">
                            <div class="row text-center mb-3">
                                <h4>A. dentitas Wajib Pajak</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">Nama Wajib Pajak</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="username" class="form-control px-3 py-3" id="username"
                                        placeholder="Masukan Nama">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">Tempat / Tanggal Lahir</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="tempat_lahir" class="form-control px-3 py-3 my-3" id="tempat_lahir"
                                        placeholder="Masukan tempat lahir">
                                        <input type="date" class="form-control px-3 py-3" name="tanggal_lahir"
                                            id="tanggal_lahir" placeholder="Masukan tanggal lahir">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 form-group">
                                    <p class="text-end">Jenis Kelamin</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option selected>Pilih Gender</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end">Status Pernikahan</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="status_pernikahan" aria-label="Default select example">
                                        <option selected>Pilih Status</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Sudah Kawin">Sudah Kawin</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">Kebangsaan</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="kebangsaan" class="form-control px-3 py-3 my-3" id="kebangsaan"
                                        placeholder="Masukan Kebangsaan">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">No. Handphone</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="number" name="no_handphone" class="form-control px-3 py-3 my-3" id="no_handphone"
                                        placeholder="Masukan Nomor Handphone">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">No. KK</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="number" name="no_kk" class="form-control px-3 py-3 my-3" id="no_kk"
                                        placeholder="Masukan No. KK">
                                </div>
                            </div>
                        </div>
                        <div id="form-2" class="d-none form-wizard">
                            <div class="row text-center mb-3">
                                <h4>B. Sumber Penghasilan</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">Klasifikasi Lapangan Usaha</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="klasifikasi" class="form-control px-3 py-3" id="lapangan_usaha"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <p class="text-end py-3">Uraian Pekerjaan</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="pekerjaan" class="form-control px-3 py-3 my-3" id="pekerjaan"
                                        placeholder="Masukan Pekerjaan">
                                </div>
                            </div>
                        </div>
                        <div id="form-3" class="d-none form-wizard">
                            <div class="row text-center mb-3">
                                <h4>C. Info Tambahan</h4>
                                <p class="">Kisaran Penghasilan Perbulan</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penghasilan" id="<5jt" value="4500000">
                                        <label class="form-check-label" for="<5jt">
                                          Kurang dari Rp. 4.500.000 s/d 4.500.000
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penghasilan" id="10jt" value="10000000">
                                        <label class="form-check-label" for="10jt">
                                          Rp. 4.500.000 s/d Rp. 9.999.999
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penghasilan" id="15jt" value="15000000">
                                        <label class="form-check-label" for="15jt">
                                          Rp. 10.000.000 s/d Rp. 14.999.999
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penghasilan" id="20jt" value="20000000">
                                        <label class="form-check-label" for="20jt">
                                          Rp. 15.000.000 s/d Rp. 19.999.999
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penghasilan" id="20jtlebih" value="21000000">
                                        <label class="form-check-label" for="20jtlebih">
                                          Rp. 20.000.000 atau lebih
                                        </label>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div id="form-4" class="d-none form-wizard">
                            <div class="row text-center mb-3">
                                <h4>C. Persyaratan</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <p class="text-end py-3">Anda adalah Wajib Pajak Orang Pribadi berstatus PUSAT yang tidak melakukan usaha/pekerjaan bebas dengan kategori.</p>
                                </div>
                            </div>
                        </div>
                        <div id="form-5" class="d-none form-wizard">
                            <div class="row text-center mb-3">
                                <h4>D. Pernyataan</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <p class="text-start py-3">Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi - sanksi sesuai dengan ketentuan perundang - undangan yang berlaku saya menyatakan bahwa apa yang telah saya beritahukan di atas adalah:</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="benar" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Benar
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="lengkap" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Lengkap
                                        </label>
                                      </div>

                                    <p class="text-start py-3">Dengan terbitnya NPWP saya menyatakan:</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="mampu" name="pernyataan" id="flexed">
                                        <label class="form-check-label" for="flexed">
                                          Akan melaksanakan hak dan kewajiban sesuai dengan ketentuan peraturan perundang - undangan di bidang perpajakan.
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" value="belum mampu" name="pernyataan" id="flexed">
                                        <label class="form-check-label" for="flexed">
                                          Belum akan melaksanakan hak dan kewajiban sesuai dengan peraturan perundang - undangan di bidang perpajakan dengan alasan belum terpenuhi syarat objektif sebagai wajib pajak.
                                        </label>
                                      </div>
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

@extends('templates.home')

@section('main_content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center" style="max-height: 200px">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-12 align-items-center order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Profile Wajib Pajak</h2>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->
<div class="container">
    <div class="card mb-4 mt-5">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Nama Lengkap</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{Auth::user()->name}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{Auth::user()->email}}</p>
            </div>
          </div>
          <hr>
          @foreach ($profile as $p)
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">HandPhone</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$p->no_handphone}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">No KK</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$p->no_kk}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Kebangsaan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$p->kebangsaan}}</p>
            </div>
          </div>
          <hr>
          @endforeach
          @foreach ($tax as $t)
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">NPWP</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->npwp}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Tipe Pajak</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->tipe_pajak}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Pekerjaan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->pekerjaan}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Penghasilan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">klasifikasi s/d {{$t->penghasilan}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Alamat Perusahaan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->alamat_kantor}}</p>
            </div>
          </div>
          <hr>
          <div class="row text-center">
            <div class="col-sm-3 mx-auto">
                <a href="{{route('user-print')}}" class="btn btn-primary mx-auto"><span class="fas fa-print"></span>Cetak PDF</a>
                <a href="{{route('checkout')}}" class="btn btn-warning mx-auto"><span class="fas fa-wallet"></span>Bayar Pajak</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  @endforeach
@endsection
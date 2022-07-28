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
              <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$p->region}}</p>
            </div>
          </div>
          <hr>
          @endforeach
          @foreach ($tax as $t)
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
              <p class="mb-0">Deskripsi</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->deskripsi}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Penghasilan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->penghasilan}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Jumlah Pajak</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->jumlah_pajak}}</p>
            </div>
          </div>
          <hr>
          <div class="row text-center">
            <div class="col-sm-3 mx-auto">
                <a href="{{route('user-print')}}" class="btn btn-primary mx-auto"><span class="fas fa-print"></span>Cetak PDF</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  @endforeach
@endsection
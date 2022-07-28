<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pajak Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center" style="font-family: sans-serif; color:blue;">Pajak.IN</h1>
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
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Keterangan</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">Dengan ini anda telah menyetujui peraturan pemerintah nomor 23 tahun 2018.
              </p>
            </div>
          </div>
    </div>
  </div>
  @endforeach
</body>
</html>
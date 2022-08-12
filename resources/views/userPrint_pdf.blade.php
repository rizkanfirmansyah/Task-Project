<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pajak Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
              <p class="mb-0">Klasifikasi</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$t->klasifikasi}}</p>
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
</body>
</html>
@extends('templates.pages')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover my-0" id="table-tax">
                            <thead>
                                <tr>
                                    <th width="10px"><label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="checkboxAll"
                                                onchange="checkboxAll(this)">
                                        </label></th>
                                    <th>Tipe Pajak</th>
                                    <th class="d-none d-md-table-cell">Deskripsi</th>
                                    <th class="d-none d-md-table-cell">Penghasilan</th>
                                    <th class="d-none d-md-table-cell">Jumlah Pajak</th>
                                    <th class="d-none d-md-table-cell">Created At</th>
                                    <th class="d-none d-md-table-cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('modal')
    <form method="post" action="/taxes" data-title="Input Data Pajak" data-reload="">
        <div class="mb-3">
            <label for="tipe_pajak" class="form-label">Tipe Pajak</label>
            <input type="text" name="tipe_pajak" class="form-control" id="tipe_pajak" placeholder="Masukkan Tipe Pajak">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi">
        </div>
        <div class="mb-3">
            <label for="penghasilan" class="form-label">Penghasilan </label>
            <input type="number" name="penghasilan" class="form-control" id="penghasilan" placeholder="Masukkan penghasilan">
        </div>
        <div class="d-flex mt-3 ">
            <button type="submit" class="ms-auto btn btn-primary px-3"> Simpan</button>
        </div>
    </form>
@endpush

@push('script')
    <script>
        let data = {
            colums: [{
                    data: 'check',
                    name: 'check',
                    sortable: false,

                },
                {
                    data: 'tipe_pajak',
                    name: 'tipe_pajak'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {
                    data: 'penghasilan',
                    name: 'penghasilan'
                },
                {
                    data: 'jumlah_pajak',
                    name: 'jumlah_pajak'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ],
            url: '/taxes/create',
            table: 'table-tax',
            switch: true,
        }

        crud.get(data)
    </script>
@endpush
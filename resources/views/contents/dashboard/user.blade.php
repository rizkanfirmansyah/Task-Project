@extends('templates.pages')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover my-0" id="table-user">
                            <thead>
                                <tr>
                                    <th width="10px"><label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="checkboxAll"
                                                onchange="checkboxAll(this)">
                                        </label></th>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Email</th>
                                    <th class="d-none d-md-table-cell">Role</th>
                                    <th class="d-none d-md-table-cell">Status</th>
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
    <form method="post" action="/users" data-title="Input Data User" data-reload="">
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Section</label>
            <select name="role" id="role" class="form-control">
                <option value disabled selected>== Pilih Role ==</option>
                <option value="1">Admin</option>
                <option value="2">Staff</option>
                <option value="3">User</option>
            </select>
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
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'status',
                    name: 'status'
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
            url: '/users/create',
            table: 'table-user',
            switch: true,
        }

        crud.get(data)
    </script>
@endpush

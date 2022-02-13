@extends('pages/admin/layouts/app')
@section('title')
    Mahasiswa
@endsection

@section('active-users')
    active
@endsection

@section('dataTablesCSS')
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add +
                </button>

                <!-- Add Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/admin/mahasiswa/" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="text" class="form-control" name="nim" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="thn_masuk" class="form-label">Tahun Masuk</label>
                                        <input type="text" class="form-control" name="thn_masuk" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tahun Masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($mahasiswa as $key => $data_M)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data_M->nim }}</td>
                                <td>{{ $data_M->nama }}</td>
                                <td>{{ $data_M->email }}</td>
                                <td>{{ $data_M->thn_masuk }}</td>
                                <td>                                    
                                    <form action="/admin/mahasiswa/{{ $data_M->id }}" method="POST" onsubmit="return confirm('Apa Anda yakin akan menghapus data Mahasiswa {{ $data_M->nama }} ?')">
                                        <button type="button" class="btn btn-sm btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editModal">
                                            Edit
                                        </button>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mb-1" name="submit">
                                            Delete
                                        </button>
                                    </form>
                                    
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="/admin/mahasiswa/{{ $data_M->id }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="nim" class="form-label">NIM</label>
                                                            <input type="text" value="{{ $data_M->nim }}" class="form-control" name="nim" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" value="{{ $data_M->nama }}" class="form-control" name="nama" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" value="{{ $data_M->email }}" class="form-control" name="email" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="thn_masuk" class="form-label">Tahun Masuk</label>
                                                            <input type="text" value="{{ $data_M->thn_masuk }}" class="form-control" name="thn_masuk" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td>Data not Found</td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('dataTablesJS')
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endsection
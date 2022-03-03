@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buku</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($buku as $row)
                            <tr>
                                <th scope="buku">{{ $loop->iteration }}</th>
                                <td>{{ $row->category->keterangan }}</td>
                                <td>{{ $row->judul_buku }}</td>
                                <td>{{ $row->pengarang }}</td>
                                <td>{{ $row->penerbit }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('pinjam.show', $row->id_buku) }}">Pinjam</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

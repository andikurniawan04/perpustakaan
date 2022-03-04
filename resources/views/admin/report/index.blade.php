@extends('layouts/app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Report</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pinjam Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Nama Buku</th>
                                <th>Kategori Buku</th>
                                <th>Tanggal Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($laporan as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->user->name }}</td>
                                    <td>{{ $row->buku->judul_buku }}</td>
                                    <td>{{ $row->buku->category->keterangan }}</td>
                                    <td>{{ $row->tanggal_pinjam }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- End of Content Wrapper -->
@endsection

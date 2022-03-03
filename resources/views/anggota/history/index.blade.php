@extends('layouts/app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">History Peminjaman</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">History Peminjaman Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div><span class="mr-2 d-none d-lg-inline text-success font-weight-bold">Nomor Anggota :
                            {{ Auth::user()->id_user }}</span></div>
                    <div><span class="mr-2 d-none d-lg-inline text-success font-weight-bold">Nama Peminjam :
                            {{ Auth::user()->name }}</span></div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Buku</th>
                                <th>Kategori Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($history as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->buku->judul_buku }}</td>
                                    <td>{{ $row->buku->category->keterangan }}</td>
                                    {{-- <td>{{ $row->tanggal_pinjam }}</td> --}}
                                    <td>{{ \Carbon\Carbon::parse($row->tanggal_pinjam)->translatedFormat('l, d F Y') }}
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($row->tanggal_kembali)->translatedFormat('l, d F Y') }}
                                    </td>
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

@extends('layouts/app')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

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
                                <div><span class="mr-2 d-none d-lg-inline text-success font-weight-bold">Nomor Anggota : {{ Auth::user()->id_user }}</span></div>
                                <div><span class="mr-2 d-none d-lg-inline text-success font-weight-bold">Nama Peminjam : {{ Auth::user()->name }}</span></div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Buku</th>
                                                <th>Kategori Buku</th>
                                                <th>Tanggal Pinjam</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($history as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
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

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <!-- Footer -->
            @include('partials.footer')
            <!-- End of Footer -->

            <!-- Logout Modal-->
            @include('partials.logout')
        @endsection

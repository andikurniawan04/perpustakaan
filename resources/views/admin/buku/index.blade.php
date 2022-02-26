@extends('layouts/app')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
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
                    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Buku Perpustakaan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <a href="/buku/create"
                                    class="btn btn-primary text-decoration-none font-weight-normal"><i>Buat
                                        data
                                        Buku</i></a>
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
                                    @foreach ($bukus as $buku)
                                    <tr>
                                        <th scope="buku">{{ $loop -> iteration }}</th>
                                        <td>{{ $buku -> category -> keterangan }}</td>
                                        <td>{{ $buku -> judul_buku }}</td>
                                        <td>{{ $buku -> pengarang }}</td>
                                        <td>{{ $buku -> penerbit }}</td>
                                        <td>
                                            <a href="/buku/{{ $buku->id_buku }}"><span>
                                                    <i class="fas fa-eye"></i></span></a>
                                            <a href="/buku/{{ $buku->id_buku }}"><span>
                                                    <i class="fas fa-eye"></i></span></a>
                                            <a href="/buku/{{ $buku->id_buku }}"><span>
                                                    <i class="fas fa-trash"></i></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex justify-content-end">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>




                <!-- Footer -->
                @include('partials.footer')
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    </div>
    @endsection
@extends('layouts/app')

<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
    <div id="wrapper">
        @include('partials.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.topbar')
                <div class="container-fluid">
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
                                    <a href="{{ route('buku.create') }}"
                                        class="btn btn-primary text-decoration-none font-weight-normal mb-3"><i>Buat
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
                                                <th scope="buku">{{ $loop->iteration }}</th>
                                                <td>{{ $buku->category->keterangan }}</td>
                                                <td>{{ $buku->judul_buku }}</td>
                                                <td>{{ $buku->pengarang }}</td>
                                                <td>{{ $buku->penerbit }}</td>
                                                <td>
                                                    <a href="/buku/{{ $buku->id_buku }}" type="button"
                                                        class="btn btn-success"><span>
                                                            <i class="fas fa-eye"></i></span></a>
                                                    <a href="/buku/{{ $buku->id_buku }}/edit" type="button"
                                                        class="btn btn-primary"><span>
                                                            <i class="fas fa-edit"></i></span></a>
                                                    <form action="/buku/{{ $buku->id_buku }}" method="POST"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <a class="btn btn-danger border-0"
                                                            onclick="return confirm('Apakah kamu yakin?')"><span>
                                                                <i class="fas fa-trash"></i></span></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {{ $bukus->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        @include('partials.logout')
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </div>
@endsection

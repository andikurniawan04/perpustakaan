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
                                                <td name="kategori_id">{{ $buku->category->keterangan }}</td>
                                                <td name="judul">{{ $buku->judul_buku }}</td>
                                                <td name="pengarang">{{ $buku->pengarang }}</td>
                                                <td name="penerbit">{{ $buku->penerbit }}</td>
                                                <td>
                                                    <a class="btn btn-danger border-0 addButton" data-toggle="modal"
                                                        data-target=" #addBook_{{ $buku->id_buku }}"> <span>
                                                            <i class="fas fa-plus"></i></span></a>
                                                </td>
                                            </tr>

                                            <div class="modal fade " id="addBook_{{ $buku->id_buku }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Meminjam?</h5>
                                                            <button class="close" type="button"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Apakah anda yakin ingin meminjam buku
                                                            <form method="" action="">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="judul" class="form-label">Judul
                                                                        Buku</label>
                                                                    <input type="text" class="form-control" id="judul"
                                                                        name="judul" value="{{ $buku->judul_buku }}"
                                                                        disabled>
                                                                </div>
                                                                {{-- <div class="mb-3">
                                                                    <label for="judul" class="form-label">Judul
                                                                        Buku</label>
                                                                    <input type="text" name="buku_id" id="buku_id"
                                                                        value="{{ $buku->id_buku }}" readonly>
                                                                </div> --}}
                                                                <div class="mb-3">
                                                                    <label for="Kategori"
                                                                        class="form-label">Kategori</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example" id="kategori_id"
                                                                        name="kategori_id" disabled>
                                                                        <option selected>
                                                                            {{ $buku->category->keterangan }}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="pengarang"
                                                                        class="form-label">Pengarang</label>
                                                                    <input type="text" class="form-control" id="pengarang"
                                                                        name="pengarang" value="{{ $buku->pengarang }}"
                                                                        disabled>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="penerbit"
                                                                        class="form-label">Penerbit</label>
                                                                    <input type="text" class="form-control" id="penerbit"
                                                                        name="penerbit" value="{{ $buku->penerbit }}"
                                                                        disabled>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button"
                                                                data-dismiss="modal">Cancel</button>
                                                            <form method="POST"
                                                                action="{{ route('meminjam.store', ['id' => $buku->id_buku]) }}">
                                                                @csrf
                                                                <button class="btn btn-primary btnSubmit" type="submit"
                                                                    data-id="{{ $buku->id_buku }}">Yes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- modal --}}
                                <div class="d-flex justify-content-end">
                                    {{ $bukus->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.footer')
                </div>
            </div>
        </div>



        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </div>
@endsection

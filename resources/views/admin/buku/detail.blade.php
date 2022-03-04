@extends('layouts/app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
            </div>
            <div class="card-body">
                <section id="contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="" action="">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul Buku</label>
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            value="{{ $buku->judul_buku }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Kategori" class="form-label">Kategori</label>
                                        <select class="form-select" aria-label="Default select example" id="kategori_id"
                                            name="kategori_id" disabled>
                                            <option selected> {{ $buku->category->keterangan }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengarang" class="form-label">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" name="pengarang"
                                            value="{{ $buku->pengarang }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                                            value="{{ $buku->penerbit }}" disabled>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="javascript:history.back()" type="button"
                                            class="btn btn-secondary mr-3"><span>Kembali</i></span></a>
                                        <a href="/buku/{{ $buku->id_buku }}/edit" type="button"
                                            class="btn btn-primary mr-3"><span>
                                                <i class="fas fa-edit"></i></span></a>
                                        <form action="/buku/{{ $buku->id_buku }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <a class="btn btn-danger border-0"
                                                onclick="return confirm('Apakah kamu yakin?')"><span>
                                                    <i class="fas fa-trash"></i></span></a>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
@endsection

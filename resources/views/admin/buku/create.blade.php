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
                                <form method="post" action="{{ route('buku.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul Buku</label>
                                        <input type="text" class="form-control" id="judul" name="judul"
                                            value="{{ old('judul') }}" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Kategori" class="form-label">Kategori</label>
                                        <select class="form-select" aria-label="Default select example" id="kategori_id"
                                            name="kategori_id">
                                            <option selected>Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                @if (old('kategori_id') == $category->id_kategori)
                                                    <option value="{{ $category->id_kategori }}" selected>
                                                        {{ $category->keterangan }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id_kategori }}">
                                                        {{ $category->keterangan }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengarang" class="form-label">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" name="pengarang"
                                            value="{{ old('pengarang') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                                            value="{{ old('penerbit') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Jumlah" class="form-label">Jumlah</label>
                                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                                            value="{{ old('jumlah') }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
@endsection

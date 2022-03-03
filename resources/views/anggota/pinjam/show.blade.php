@extends('layouts/app')

@section('content')
    <div id="wrapper">
        @include('partials.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Buku</h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pinjam Buku</h6>
                        </div>
                        <div class="card-body">
                            <section id="contact">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <form action="{{ route('pinjam.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ $buku->id_buku }}" name="id_buku" />
                                                <input type="hidden" value="{{ Auth::user()->id_user }}" name="id_user" />
                                                <div class="mb-3">
                                                    <label for="judul" class="form-label">Judul Buku</label>
                                                    <input type="text" class="form-control" id="judul" name="judul"
                                                        value="{{ $buku->judul_buku }}" disabled>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="Kategori" class="form-label">Kategori</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="kategori_id" name="kategori_id" disabled>
                                                        <option selected> {{ $buku->category->keterangan }}
                                                        </option>
                                                    </select>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="pengarang" class="form-label">Pengarang</label>
                                                    <input type="text" class="form-control" id="pengarang"
                                                        name="pengarang" value="{{ $buku->pengarang }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="penerbit" class="form-label">Penerbit</label>
                                                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                                                        value="{{ $buku->penerbit }}" disabled>
                                                </div>
                                                <div class="d-flex justify-content-end mb-3">
                                                    <form action="{{ route('pinjam.store') }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Pinjam</button>
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



                <!-- Footer -->
                @include('partials.footer')
                <!-- End of Footer -->

            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        @include('partials.logout')
    </div>
    </div>
@endsection

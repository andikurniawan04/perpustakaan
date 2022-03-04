@extends('layouts/app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
            </div>
            <div class="card-body">
                <section id="contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="mb-3">
                                        <label for="peserta" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" id="nama" aria-describedby="nama"
                                            name="nama" value="{{ $kategori->keterangan }}" />
                                    </div>

                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    <!-- End of Content Wrapper -->
@endsection

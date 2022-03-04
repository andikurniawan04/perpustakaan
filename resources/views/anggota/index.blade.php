@extends('layouts.app')
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Koleksi buku -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Koleksi Buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $books }} Buku</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Koleksi kategori -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Kategori Buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $categories }} Kategori</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Anggota -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Data Anggota</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }} Anggota</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        @include('partials.logout')
        </body>

        <script type="text/javascript">
            function artikel() {
                $.ajax({
                    type: "GET",
                    url: "/artikel"
                }).done(function(data) {
                    $('#utama').html(data);
                });
            }

            function kategori() {
                $.ajax({
                    type: "GET",
                    url: "/kategori"
                }).done(function(data) {
                    $('#utama').html(data);
                });
            }

            function listbuku() {
                $.ajax({
                    type: "GET",
                    url: "/kategori"
                }).done(function(data) {
                    $('#utama').html(data);
                });
            }
        </script>


        <!-- User -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Admin
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admins }} Admin</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2>Koleksi Buku</h2>
    </div>
    <!--Book Collection-->
    <div class="card-columns">
        @foreach ($collBooks as $book)
            <div class="card">
                <img src="img/buku ({{ $loop->iteration }}).jpg" class="card-img-top" alt="..." height="300">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">{{ $book->judul_buku }}</h4>
                    <p class="card-text text-muted">{{ $book->category->keterangan }}.</p>
                    <p class="text-justify">Apa yang kau pelajari di sekolah hari ini, anakku?
                        Apa yang kau pelajari di sekolah hari ini, anakku?
                        Aku diajari bahwa setiap orang punya kebebasan,
                        Begitulah yang diajarkan guruku.
                    </p>
                    <h6>Oleh {{ $book->pengarang }}</h6>
                    <h6>Penerbit {{ $book->penerbit }}.</h6>
                    <p class="card-text text-right"><small class="text-muted">Diposting pada
                            {{ $book->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection

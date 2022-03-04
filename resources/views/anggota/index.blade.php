@extends('layouts.app')
@section('content')
    <!-- Content Row -->
    <div class="row">

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

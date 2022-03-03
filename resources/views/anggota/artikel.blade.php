@extends('layouts/app')

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
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">200 anggota</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User Pengguna
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
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
        <div class="card">
            <img src="img/buku1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Politik Pendidikan</h5>
                <p class="card-text">by Paulo Freire, Agung Prihantoro (Translator), Fuad Arif Fudiyartanto
                    (Translator).
                <p>Apa yang kau pelajari di sekolah hari ini, anakku?
                    Apa yang kau pelajari di sekolah hari ini, anakku?

                    Aku diajari bahwa Washington tidak pernah berdusta,
                    Aku diajari bahwa tentara itu tidak gampang mati,
                    Aku diajari bahwa setiap orang punya kebebasan,
                    Begitulah yang diajarkan guruku.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/buku2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Teknologi Untuk Masa Depan</h5>
                <p class="card-text">by Najelaa Shihab & Komunitas Gurug Belajar.
                <p>Teknologi untuk Masa Depan telah diluncurkan pada Temu Pendidik Nusantara 2019
                    sebagai fokus belajar di Komunitas Guru Belajar Nusantara. Kami memaknai
                    teknologi sebagai sejumlah kompetensi, metode, dan proses yang dapat
                    mempermudah manusia dalam melaksanakan sebuah pekerjaan, di mana dalam
                    konteks pendidikan, pekerjaan tersebut terkait dengan upaya
                    mengoptimalkan proses untuk mencapai tujuan pembelajaran.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/buku3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Love from A to Z</h5>
                <p class="card-text">by S.K. Ali.
                <p>Buku ini mengangkat isu Islamofobia dan bersetting di Doha, Qatar. Penulis menghadirkan Islamofobia yang
                    sering dihadapi wanita berhijab seperti Zayneb (tokoh utama). Tapi penulis tidak hanya menggambarkan
                    sisi buruk yang dialami oleh Muslim di negara di mana Muslim adalah kaum minoritas, penulis juga
                    menunjukkan kepada kita bagaimana tokoh-tokohnya mengamalkan ajaran Islam dalam kehidupan sehari-hari,
                    serta bagaimana Muslim menjalin persahabatan dan memelihara sikap saling menghargai dengan non-Muslim.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/buku1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Politik Pendidikan</h5>
                <p class="card-text">by Paulo Freire, Agung Prihantoro (Translator), Fuad Arif Fudiyartanto
                    (Translator).
                <p>Apa yang kau pelajari di sekolah hari ini, anakku?
                    Apa yang kau pelajari di sekolah hari ini, anakku?

                    Aku diajari bahwa Washington tidak pernah berdusta,
                    Aku diajari bahwa tentara itu tidak gampang mati,
                    Aku diajari bahwa setiap orang punya kebebasan,
                    Begitulah yang diajarkan guruku.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/buku2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Teknologi Untuk Masa Depan</h5>
                <p class="card-text">by Najelaa Shihab & Komunitas Gurug Belajar.
                <p>Teknologi untuk Masa Depan telah diluncurkan pada Temu Pendidik Nusantara 2019
                    sebagai fokus belajar di Komunitas Guru Belajar Nusantara. Kami memaknai
                    teknologi sebagai sejumlah kompetensi, metode, dan proses yang dapat
                    mempermudah manusia dalam melaksanakan sebuah pekerjaan, di mana dalam
                    konteks pendidikan, pekerjaan tersebut terkait dengan upaya
                    mengoptimalkan proses untuk mencapai tujuan pembelajaran.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="img/buku3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Love from A to Z</h5>
                <p class="card-text">by S.K. Ali.
                <p>Buku ini mengangkat isu Islamofobia dan bersetting di Doha, Qatar. Penulis menghadirkan Islamofobia yang
                    sering dihadapi wanita berhijab seperti Zayneb (tokoh utama). Tapi penulis tidak hanya menggambarkan
                    sisi buruk yang dialami oleh Muslim di negara di mana Muslim adalah kaum minoritas, penulis juga
                    menunjukkan kepada kita bagaimana tokoh-tokohnya mengamalkan ajaran Islam dalam kehidupan sehari-hari,
                    serta bagaimana Muslim menjalin persahabatan dan memelihara sikap saling menghargai dengan non-Muslim.
                </p>
                </p>
                <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
            </div>
        </div>
    </div>

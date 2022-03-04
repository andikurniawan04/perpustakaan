{{-- @extends('layouts/app')

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
                    <div class="h5 mb-0 font-weight-bold text-gray-800">1.500 buku</div>
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
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
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
                <!-- Konten Buku-->
                    <div class="row card-deck">
                            <!-- Buku1 -->
                            <div class="col-lg-6 mb-4 ">
                            <div class="card shadow mb-4 ">
                                <div class="card-header bg-primary text-white py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Boy Chandra</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/cover1.jpg" alt="...">
                                    </div>
                                    <p>Buat kamu yang lagi baper atau butuh suntikan energi dan semangat, 
                                        membaca prosa-prosa Boy Chandra ini bisa cukup menghibur. 
                                        Terdiri dari lima bagian, kita akan dibawa hanyut oleh tulisan-tulisan yang sangat mengena di hati. 
                                        Mulai dari soal memaknai arti kenangan, belajar untuk tidak mengulangi kesalahan yang sama lagi, mengatasi kesedihan akan luka atau kepahitan yang baru saja dialami, belajar untuk merelakan dan mengikhlaskan, 
                                        hingga memaknai arti cinta dengan perspektif yang lebih luas lagi.
                                         </a>
                                    </div>    
                                </div>
                            </div>
                            <!-- Buku 2 -->
                            <div class="col-lg-6 mb-4 ">
                            <div class="card shadow mb-4">
                                <div class="card-header bg-primary py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Tere Liye</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/cover9.jpg" alt="...">
                                    </div>
                                    <p>Buku ini menceritakan tentang gadis berumur 12 tahun bernama Tania. 
                                      Gadis kecil yang harus putus sekolah dan mengamen bersama adiknya sepanjang hari setelah 3 tahun lalu ayahnya pergi untuk selamanya. 
                                        Tania, Dede (adiknya), dan ibunya tinggal di sebuah rumah kardus di pinggir kota akibat kesulitan ekonomi.                     
                                        </a>
                                        <br>
                                        <br>
                                        <br>
                                </div>
                            </div>
                        </div>
                             <!-- Buku 3 -->
                            <div class="col-lg-3 mb-4 ">
                            <div class="card shadow mb-4">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">J.R.R Tolkien</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:400px; height:300px;"
                                            src="img/thehobbit.jpg" alt="...">
                                    </div>
                                    <p>
                
                                        </a>
                                        
                                </div>
                            </div>
                        </div>
                         <!-- Buku 4 -->
                         <div class="col-lg-3 mb-4 ">
                            <div class="card shadow mb-4">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">George Orwell</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:400px; height:300px;"
                                            src="img/animalfarm.jpg" alt="...">
                                    </div>
                                    <p>
                
                                        </a>
                                        
                                </div>
                            </div>
                        </div>
                         <!-- Buku 5 -->
                         <div class="col-lg-3 mb-4 ">
                            <div class="card shadow mb-4">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Neil Gaiman</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:400px; height:300px;"
                                            src="img/norse.jpg" alt="...">
                                    </div>
                                    <p>
                
                                        </a>
                                        
                                </div>
                            </div>
                        </div>
                            <!-- Buku 6 -->
                            <div class="col-lg-3 mb-4 ">
                            <div class="card shadow mb-4">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Charles Fernyhough</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:400px; height:300px;"
                                            src="img/piecesoflight.jpg" alt="...">
                                    </div>
                                    <p>
                
                                        </a>
                                        
                                </div>
                            </div>
                        </div>
                    </div> --}}

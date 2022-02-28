@extends('layouts/app')

@section('content')
<body onload="konten();">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="" id="utama"></div>
                </div>
                <!-- /.container-fluid -->

                    <!-- Footer -->
                    @include('partials.footer')
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

        </div>
        <!-- End of Content Wrapper -->

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
        function konten(){
                $.ajax({
                type:"GET",
                url:"/konten"           
                }).done(function(data){
                $('#utama').html(data);
                });
                }

        function kategori(){
                $.ajax({
                type:"GET",
                url:"/kategori"           
                }).done(function(data){
                $('#utama').html(data);
                });
                }

        function listbuku(){
                $.ajax({
                type:"GET",
                url:"/kategori"           
                }).done(function(data){
                $('#utama').html(data);
                });
                }
    </script>
@endsection

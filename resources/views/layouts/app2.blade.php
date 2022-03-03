<!DOCTYPE html>
<html lang="en">
{{-- Head --}}
@include('partials.head')

{{-- Body --}}

<body id="page-top">

    <body onload="artikel();">
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

                </div>
                <!-- End of Main Content -->

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
        <!-- Logout Modal-->
        @include('partials.logout')
        @include('partials.scripts')
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
    </script>
</body>

</html>
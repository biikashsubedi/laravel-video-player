@include('video.layouts.header')
<body class="main-body leftmenu dark-theme">
<!-- Page -->
<div class="page">
    <!-- Sidemenu -->
@php
    $path = storage_path('app/public/') . 'vid';
        $files = \File::allFiles($path);
        $folderNames = [];
        foreach ($files as $file) {
            $fileLink = Storage::url($file);
            $folderName1 = str_replace('/storage//Users/bikashsubedi/dev/laravel/Sites/videoPlayer/storage/app/public/vid/', '', $fileLink);
            $folderName2 = str_replace('/'.basename($file), '', $folderName1);
            $folderNames[] = $folderName2;
        }
@endphp
@include('video.layouts.Sidemenu', ['items'=>$files, 'folders'=>$folderNames])
<!-- End Sidemenu -->

    <!-- Main Header-->
@include('video.layouts.mainheader')
<!-- End Main Header-->


    <!-- Main Content-->
    <div class="main-content side-content pt-0 " style="margin-top: 80px">

        <div class="container-fluid">
            <div class="inner-body">


                <!-- row opened -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="">
                                    <div class="table-responsive-sm">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row End -->


            </div>
        </div>
    </div>
    <!-- End Main Content-->

    <!-- Main Footer-->
    <div class="main-footer text-center">
        <div class="container">
            <div class="row row-sm">
                <div class="col-md-12">
                    <span>Copyright © 2021. Designed by <a
                            href="https://www.bikashsubedi.com/">Bikash Subedi</a> All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

    <!-- Sidebar -->
@include('video.layouts.sidebar')
<!-- End Sidebar -->

</div>
<!-- End Page -->

{{--//footer--}}
@include('video.layouts.footer')
</body>
</html>

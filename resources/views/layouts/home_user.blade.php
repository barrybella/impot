<!DOCTYPE html>
<html>
<head>
     @include('layouts.head')
</head>
<body oncontextmenu="return false;">
    <div class="wrapper">
         @include('layouts.header')
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            @include('layouts.profile_gauche')
                            <div class="col-lg-9 col-md-6 no-pd">
                                <div class="main-ws-sec">
                                    @yield('content')
                                </div><!--main-ws-sec end-->
                            </div>
                        </div>
                    </div><!-- main-section-data end-->
                </div>
            </div>
        </main>
          @include('layouts.footer')
    </div><!--theme-layout end-->
     @include('layouts.script')
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 13:12:43 GMT -->
</html>

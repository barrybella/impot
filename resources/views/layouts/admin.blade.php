<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion E-taxes </title>
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/nifty.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('template/plugins/pace/pace.min.js')}}"></script>
    <link href="{{asset('template/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('template/js/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('template/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('template/js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('template/js/demo/nifty-demo.min.js') }}"></script>
  <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('template/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('template/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ asset('template/plugins/chosen/chosen.jquery.min.js') }}"></script>
  <script src="{{ asset('template/plugins/noUiSlider/nouislider.min.js') }}"></script>
  <script src="{{ asset('template/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('template/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{asset('template/js/jquery.min.js')}}"></script>
  <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template/js/nifty.min.js')}}"></script>
  <script src="{{asset('template/js/demo/nifty-demo.min.js')}}"></script>
  <script src="{{asset('template/plugins/flot-charts/jquery.flot.min.js')}}"></script>
<script src="{{asset('template/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('template/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
  <script src="{{asset('template/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('template/js/demo/dashboard.js')}}"></script>
  <script>
      $(function(){
          //$('#participant').chosen({width:'100%'});
          $('.select-research').chosen({width:'100%'});
          $('.dynamic_form').on('click', 'a', function(event){
              event.preventDefault();

              var index = +$(this).attr('data-content');
              console.log('Index: ' +index);
              $('.div-'+index).remove();

              compteur--;


          });

          $('.date-input').datepicker({
              format: "yyyy-mm-dd",
              autoclose:true,
              todayHighlight: true
          });

      });
  </script>

  @yield('js')
</head>
<body>
  <div id="container" class="effect aside-float aside-bright mainnav-lg" >
    @include('layouts.header')
    <div class="boxed" >
        <div id="content-container" >
          <div id="page-head" >
         <div class="pad-all text-center">
           <h3>Welcome {{Auth::user()->prenom.' '.Auth::user()->nom }}.</h3>
           <p1>Gestion E-taxes c'est une plate-forme de payement taxes en ligne .</p>
         </div>
         </div>
            <div id="page-content">
                @yield('content')
            </div>
        </div>
        @include('layouts.asidebar')
    </div>
    @include('layouts.footer')
</div>

@yield('javascript')
</body>
</html>

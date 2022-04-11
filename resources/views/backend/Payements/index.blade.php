@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link href="{{asset('template/nifty/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('template/nifty/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('template/nifty/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('template/nifty/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('template/nifty/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template/nifty/js/demo/tables-datatables.js')}}"></script>
@endsection
@section('content')
<!--===================================================-->
<div class="panel">
    <div class="panel-body text-center">
       <h3>Information du Redevable</h3>
       <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
           <thead>
           <tr>
                     <th>Noms</th>
                     <th>Prenoms</th>                    
                     <th>Email</th>
           </tr>
           </thead>
           <tbody>
             <td>{{$redevables->nom}}</td>
             <td>{{$redevables->prenom}}</td>
             <td>{{$redevables->email}}</td>
           </tbody>
       </table>

       <h5 class="text-left">Pour passer au payement cliquer sur button suivant</h5>
       <div class="row">
       <div class="text-right">
         @can('create', App\Payements::class)
             <a href="{{route('Payements.create')}}" class="btn btn-warning">suivant</a>
         @endcan
       </div>
   </div>

   </div>


</div>


@endsection

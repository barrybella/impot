@extends('layouts.admin')

@section('css')
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
    <div class="panel">
        <div class="panel-heading">
             <h3 class="panel-title" style="display: inline;">Liste des Quartier</h3>
         </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>Quartier</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                          <th>{{$Quartier->id}}</th>
                          <td>{{$Quartier->Quartier}}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>



@endsection

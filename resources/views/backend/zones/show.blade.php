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
         <h3 class="panel-title" style="display: inline;">Liste des Zones <b></b></h3>
     </div>
    <div class="panel-body">
      <div class="row">
          <div class="col-sm-6 table-toolbar-left">
            <a href="{{route('zonesPdf.pdf',$zones)}}" class="btn btn-purple">Export PDF</a>
            <a href=""class="btn btn-success">Imprimer</a>
            <a href="" class="btn btn-primary">Export Excel</a>

          </div>
          <div class="col-sm-6 table-toolbar-right">
              <div class="btn-group">
              </div>
          </div>
      </div>
        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                        <th>zones</th>
                        <th>Quartier</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>{{$zones->zone}}</td>
                <td>{{$zones->quartiers->Quartier}}</td>
                  </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="pull-center">
    <a class="btn btn-primary" href="{{ route('zones.index') }}">Back</a>
</div>
@endsection

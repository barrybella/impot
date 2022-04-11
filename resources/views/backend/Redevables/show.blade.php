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
         <h3 class="panel-title" style="display: inline;">Liste des Redevables <b></b></h3>
     </div>
    <div class="panel-body">
      <div class="row">
          <div class="col-sm-6 table-toolbar-left">        
              <button class="btn btn-purple">Export Excel</button>
              <button class="btn btn-success">Imprimer</button>
              <div class="btn-group">
                  <button class="btn btn-primary">Export PDF</button>
              </div>
          </div>
          <div class="col-sm-6 table-toolbar-right">
              <div class="btn-group">
              </div>
          </div>
      </div>
        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                        <th>Noms</th>
                        <th>Prenoms</th>
                        <th>Quartier</th>
                        <th>zones</th>
                        <th>Type Redevabilité</th>
                        <th>Activité</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Nature</th>
                        <th>Patente</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <td>{{$redevables->noms}}</td>
                <td>{{$redevables->prenoms}}</td>
                <td>{{$redevables->quartiers->Quartier}}</td>
                <td>zones1</td>
                 <td>{{$redevables->activites->Activites}}</td>
                 <td>{{$redevables->types_redevabilites->Types}}</td>
                  <td>{{$redevables->telephone}}</td>
                  <td>{{$redevables->email}}</td>
                  <td>{{$redevables->nature}}</td>
                  <td>{{$redevables->Patente}}</td>



                  </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="pull-center">
    <a class="btn btn-primary" href="{{ route('Redevables.index') }}">Back</a>
</div>
@endsection

@extends('layouts.admin')

@section('css')
    <link href="{{asset('backend/nifty/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('backend/nifty/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('backend/nifty/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/nifty/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('backend/nifty/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/nifty/js/demo/tables-datatables.js')}}"></script>
@endsection
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title" style="display: inline;">Liste des Taxes</h3>
            @can('create', App\Taxes::class)
                <a href="{{route('taxes.create')}}" id="demo-btn-addrow" class="btn btn-purple"><i class="demo-pli-add"></i>Ajouter</a>
                 
            @endcan

        </div>

        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Taxes</th>
                      <th>Taux</th>
                    <th class="min-tablet">Action</th>
                </tr>
                </thead>
                <tbody>
                @if($taxes->isNotEmpty())
                  @foreach($taxes as $cd)
                      <tr>
                        <th>{{$cd->id}}</th>
                        <td>{{$cd->taxes}}</td>
                        <td>{{$cd->taux}}%</td>
                        <!-- <td>{{Date::make($cd->created_at)->format('d F Y')}}</td> -->
                          <td>
                              <form method="POST" action="{{ route('taxes.destroy', ['id' => $cd->id]) }}"
                                    onsubmit="return confirm('Voulez-vous vraiment supprimé cet taxes')">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                  @can('edit', App\Taxes::class)
                                      <a href="{{route('taxes.edit', ['id' => $cd->id]) }}" class="btn btn-warning btn-icon btn-circle"
                                         class="btn btn-warning btn-xs">
                                          <i class="glyphicon glyphicon-edit"></i>
                                      </a>
                                  @endcan

                                  @can('delete', App\Taxes::class)
                                  <button type="submit" class="btn btn-danger btn-icon btn-circle">
                                      <i class="glyphicon glyphicon-trash"></i>
                                  </button>
                                  @endcan


                              </form>
                          </td>

                      </tr>

                  @endforeach
                  @else
                      <p class="alert alert-danger">Aucune information disponible pour le moment!</p>
                  @endif
                </tbody>
            </table>
        </div>
    </div>



@endsection

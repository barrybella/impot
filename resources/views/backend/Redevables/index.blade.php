@extends('layouts.admin')
@section('css')
    <link href="{{asset('template/nifty/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
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
            <h3 class="panel-title" style="display: inline;">Liste des Redevables</h3>
            @can('create', App\Redevables::class)
                <a href="{{route('Redevables.create')}}" class="btn btn-primary">Ajouter</a>
            @endcan
        </div>
        <div class="panel-body" >
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                          <th>Noms</th>
                          <th>Prenoms</th>
                          <th>Quartier</th>
                          <th>Type Redevabilité</th>
                          <th>Activité</th>
                          <th>Telephone</th>
                          <th>Email</th>
                          <th>Nature</th>
                          <th>Patente</th>
                    <th class="min-tablet">Action</th>
                </tr>
                </thead>
                <tbody>
                @if($redevables->isNotEmpty())
                @foreach($redevables as $red)
                    <tr>
                        <td>{{$red->noms}}</td>
                        <td>{{$red->prenoms}}</td>
                        <td>{{$red->Quartier}}</td>
                        <td>{{$red->Types}}</td>
                        <td>{{$red->Activites}}</td>
                        <td>{{$red->telephone}}</td>
                        <td>{{$red->email}}</td>
                        <td>{{$red->nature}}</td>
                        <td>{{$red->Patente}}</td>
                        <td>
                            <form method="POST" action="{{ route('Redevables.destroy', ['id' => $red->id]) }}"
                                  onsubmit="return confirm('Voulez-vous vraiment supprimé cet Redevables')">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @can('edit', App\Redevables::class)
                                    <a href="{{route('Redevables.edit', ['id' => $red->id]) }}" class="btn btn-warning btn-icon btn-circle"
                                       class="btn btn-warning btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                @endcan

                                @can('delete', App\Redevables::class)
                                <button type="submit" class="btn btn-danger btn-icon btn-circle">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                                @endcan
                                @can('show', App\Redevables::class)
                             <a href="{{ route('Redevables.show', $red->id) }}"
                                   class="btn btn-success btn-icon btn-circle">
                               <i class="glyphicon glyphicon-eye-open"></i>
                               </a>
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

@extends('layouts.admin')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire de Modification </h3>
    </div>
    <div class="panel-body">
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal"  method="POST" action=" {{route('zones.update', ['id' => $zones->id])}}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="panel-body">
              <div class="form-group {{ $errors->has('zone') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Zones</label>
                  <div class="col-sm-9">
                      <input type="text"  id="zone" name="zone" value="{{$zones->zone}}" class="form-control">
                      {{ $errors->has('zone') ? 'has-error' : '' }}
                  </div>
              </div>
              <div class="form-group">
                <?php
                  $quartier = DB::table('quartiers')->get();
                 ?>
          <label class="col-sm-3 control-label" for="demo-hor-inputpass">Quartier</label>
          <div class="col-sm-9">
          <select class="form-control" name="id_quartier">
            @foreach ($quartier as $quart)
              <option value="{{$quart->id}}"{{$quart->id == $zones->id_quartier ? 'selected' : ''}} >{{$quart->Quartier}} </option>
            @endforeach
          </select>
          </div>
        </br>
        </br>
        </br>
        <div class="panel-footer text-right">
          <button type="reset" class="btn btn-danger wizard-prev-btn btn-rounded mr-auto">Annuler</button>
          <button type="submit"class="btn btn-primary wizard-next-btn btn-rounded ml-auto">Valider</button>
          <div class="pull-left">
              <a class="btn btn-success" href="{{ route('zones.index') }}">Back</a>
          </div>
        </div>
      </form>
      <!--===================================================-->
      <!--End Horizontal Form-->

    </div>
    </div>
</div>



@endsection

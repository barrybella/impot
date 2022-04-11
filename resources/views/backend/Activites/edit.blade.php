@extends('layouts.admin')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire de Modification </h3>
    </div>
    <div class="panel-body">
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal"  method="POST" action=" {{route('Activites.update', ['id' => $Activites->id])}}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="panel-body">
              <div class="form-group {{ $errors->has('Activites') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Taxes</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="Activites" id="Activites" name="Activites" value="{{$Activites->Activites}}" class="form-control">
                      {{ $errors->has('Activites') ? 'has-error' : '' }}
                  </div>
              </div>
              <div class="form-group {{ $errors->has('TVA') ? 'has-error' : '' }}">
                  <label class="col-sm-3 control-label" for="demo-hor-inputpass">TVA</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="TVA" id="TVA"name="TVA" value="{{$Activites->TVA}}"class="form-control">
                      {{ $errors->has('TVA') ? 'has-error' : '' }}
                  </div>
              </div>
          </div>
          <div class="panel-footer text-right">
            <button type="reset" class="btn btn-danger wizard-prev-btn btn-rounded mr-auto">Annuler</button>
            <button type="submit"class="btn btn-primary wizard-next-btn btn-rounded ml-auto">Valider</button>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('Activites.index') }}">Back</a>
            </div>
          </div>
      </form>
      <!--===================================================-->
      <!--End Horizontal Form-->

    </div>
</div>



@endsection

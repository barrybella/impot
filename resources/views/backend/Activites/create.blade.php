@extends('layouts.admin')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire d'Ajout</h3>
    </div>
    <div class="panel-body">
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal"  method="POST" action=" {{route('Activites.store')}}">
        {{ csrf_field() }}
          <div class="panel-body">
              <div class="form-group {{ $errors->has('Activites') ? 'has-error' : '' }}">
                  <label class="col-sm-3 control-label" for="demo-hor-inputpass">Activites</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="Activites" id="Activites"name="Activites" value="{{ old('Activites') }}"class="form-control">
                      {!! $errors->first('Activites', '<span class="help-block text-danger">:message</span>' ) !!}
                  </div>
              </div>
              <div class="form-group {{ $errors->has('TVA') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">TVA</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="TVA" id="TVA" name="TVA" value="{{ old('TVA') }}" class="form-control">
                      {!! $errors->first('TVA', '<span class="help-block text-danger">:message</span>' ) !!}
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

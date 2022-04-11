@extends('layouts.admin')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire de Modification </h3>
    </div>
    <div class="panel-body">
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal"  method="POST" action=" {{route('taxes.update', ['id' => $taxes->id])}}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="panel-body">
              <div class="form-group {{ $errors->has('taxes') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Taxes</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="taxes" id="taxes" name="taxes" value="{{$taxes->taxes}}" class="form-control">
                      {{ $errors->has('taxes') ? 'has-error' : '' }}
                  </div>
              </div>
              <div class="form-group {{ $errors->has('taux') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Taux</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="taux" id="taux" name="taux" value="{{$taxes->taux}}" class="form-control">
                      {{ $errors->has('taux') ? 'has-error' : '' }}
                  </div>
              </div>
          </div>
          <div class="panel-footer text-right">
            <button type="reset" class="btn btn-danger wizard-prev-btn btn-rounded mr-auto">Annuler</button>
            <button type="submit"class="btn btn-primary wizard-next-btn btn-rounded ml-auto">Modifier</button>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('taxes.index') }}">Back</a>
            </div>
          </div>
      </form>
      <!--===================================================-->
      <!--End Horizontal Form-->

    </div>
</div>



@endsection

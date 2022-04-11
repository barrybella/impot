@extends('layouts.admin')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire d'Ajout</h3>
    </div>
    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action=" {{route('Redevables.store')}}">
                       {{ csrf_field() }}
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-md-4 mar-btm {{ $errors->has('noms') ? 'has-error' : '' }}">
                                      <label for="">Noms</label>
					                            <input type="text" class="form-control" name="noms" placeholder="Noms">
                                        {!! $errors->first('noms', '<span class="help-block text-danger">:message</span>' ) !!}
					                        </div>
					                        <div class="col-md-4 mar-btm {{ $errors->has('prenoms') ? 'has-error' : '' }}">
                                    <label for="">prenoms</label>
					                            <input type="text" class="form-control" placeholder="prenoms" name="prenoms">
                                        {!! $errors->first('prenoms', '<span class="help-block text-danger">:message</span>' ) !!}
					                        </div>
					                        <div class="col-md-4 mar-btm {{ $errors->has('Telephone') ? 'has-error' : '' }}">
                                      <label for="">Telephone</label>
					                            <input type="text" class="form-control" placeholder="telephone"name="Telephone" >
                                        {!! $errors->first('Telephone', '<span class="help-block text-danger">:message</span>' ) !!}
					                        </div>
					                    </div>

                              <div class="row">
                                  <div class="col-md-4 mar-btm {{ $errors->has('Email') ? 'has-error' : '' }}">
                                      <label for="">email</label>
                                      <input type="email" class="form-control" placeholder="email"name="Email" >
                                        {!! $errors->first('Email', '<span class="help-block text-danger">:message</span>' ) !!}
                                  </div>
                                  <div class="col-md-4 mar-btm {{ $errors->has('password') ? 'has-error' : '' }}">
                                      <label for="">Password</label>
                                      <input type="password" class="form-control" placeholder="password" name="password" >
                                      {!! $errors->first('password', '<span class="help-block text-danger">:message</span>' ) !!}
                                  </div>
                                  <!-- <div class="col-md-4 mar-btm {{ $errors->has('confirm') ? 'has-error' : '' }}">
                                      <label for="">confirmer le mot de passe</label>
                                      <input type="password" class="form-control" placeholder="Confirme mot de passe" name="confirm" >
                                      {!! $errors->first('password', '<span class="help-block text-danger">:message</span>' ) !!}
                                  </div> -->
                                  <div class="col-md-4 mar-btm {{ $errors->has('Nature') ? 'has-error' : '' }}">
                                    <label for="">Nature</label>
                                      <input type="text" class="form-control" placeholder="nature" name="Nature" >
                                        {!! $errors->first('Nature', '<span class="help-block text-danger">:message</span>' ) !!}
                                  </div>
                                  <div class="col-md-4 mar-btm {{ $errors->has('Patente') ? 'has-error' : '' }}">
                                    <label for="">Patente</label>
                                      <input type="text" class="form-control" placeholder="Patente" name="Patente" >
                                        {!! $errors->first('Patente', '<span class="help-block text-danger">:message</span>' ) !!}
                                  </div>
                                  <div  class="col-md-4 mar-btm">
                          <?php
                            $types = DB::table('types_redevabilites')->get();
                            $quartier = DB::table('quartiers')->get();
                            $activite = DB::table('activites')->get();

                           ?>
                    <label>Type de Redevabilité</label>
                        <select class="form-control" name="id_typeR">
                          @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->Types}}</option>
                          @endforeach
                      </select>
                        </div>
                        <div class="col-md-4 mar-btm">
      <label>Activité</label>
          <select class="form-control" name="id_activite">
            @foreach ($activite as $activet)
              <option value="{{$activet->id}}">{{$activet->Activites}} </option>
            @endforeach
          </select>
          </div>
<div class="col-md-4 mar-btm">
      <label >Quartier</label>
          <select class="form-control" name="id_quartier">
            @foreach ($quartier as $quart)
              <option value="{{$quart->id}}">{{$quart->Quartier}} </option>
            @endforeach
        </select>
          </div>
            </div>
            </div>
            <div class="panel-footer text-right">
            <button  type="reset"class="btn btn-success">Annuler</button>
            <button  type="submit"class="btn btn-primary">Valider</button>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('Redevables.index') }}">Back</a>
            </div>
            </div>
	     </form>

       </div>
    </div>

</div>

@endsection

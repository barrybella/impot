@extends('layouts.admin')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire de Modification des Redevables</h3>
    </div>
    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action=" {{route('Redevables.update', ['id' => $redevables->id])}}">
                      {{ csrf_field() }}
                      {{ method_field('PATCH') }}
					                <div class="panel-body">
					                    <div class="row">
					                        <div class="col-md-4 mar-btm">
                                      <label for="">Noms</label>
					                            <input type="text" class="form-control" name="noms" placeholder="Noms" value="{{$redevables->noms}}">
					                        </div>
					                        <div class="col-md-4 mar-btm">
                                    <label for="">prenoms</label>
					                            <input type="text" class="form-control" placeholder="prenoms" name="prenoms" value="{{$redevables->prenoms}}">
					                        </div>
					                        <div class="col-md-4 mar-btm">
                                      <label for="">Telephone</label>
					                            <input type="text" class="form-control" placeholder="telephone"name="Telephone"value="{{$redevables->telephone}}" >
					                        </div>
					                    </div>

                              <div class="row">
                                  <div class="col-md-4 mar-btm">
                                      <label for="">email</label>
                                      <input type="email" class="form-control" placeholder="email"name="Email" value="{{$redevables->email}}">
                                  </div>
                                  <div class="col-md-4 mar-btm">
                                    <label for="">Nature</label>
                                      <input type="text" class="form-control" placeholder="nature" name="Nature" value="{{$redevables->nature}}">
                                  </div>
                                  <div class="col-md-4 mar-btm">
                                    <label for="">Patente</label>
                                      <input type="text" class="form-control" placeholder="Patente" name="Patente" value="{{$redevables->Patente}}">
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
                <option value="{{$type->id}}" {{$type->id == $redevables->id_typeR ? 'selected' : ''}}>{{$type->Types}}</option>
              @endforeach
          </select>
                        </div>
                        <div class="col-md-4 mar-btm">
      <label>Activité</label>
          <select class="form-control" name="id_activite">
              @foreach ($activite as $activet)
                <option value="{{$activet->id}}" {{$activet->id == $redevables->id_activite ? 'selected' : ''}}>{{$activet->Activites}} </option>
              @endforeach
            </select>
          </select>
          </div>
<div class="col-md-4 mar-btm">
      <label >Quartier</label>
      <select class="form-control" name="id_quartier">
        @foreach ($quartier as $quart)
          <option value="{{$quart->id}}"{{$quart->id == $redevables->id_quartier ? 'selected' : ''}} >{{$quart->Quartier}} </option>
        @endforeach
    </select>
          </div>
            </div>
            </div>
            <div class="panel-footer text-right">
            <button  type="reset"class="btn btn-danger">Annuler</button>
            <button  type="submit"class="btn btn-primary">Modifier</button>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('Redevables.index') }}">Back</a>
            </div>
            </div>

	     </form>

       </div>
    </div>
</div>

@endsection

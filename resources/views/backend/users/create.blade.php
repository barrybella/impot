@extends('layouts.admin')
@section('content')   
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title" class="text-right"> Formulaire de Saisis des utilisateurs</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->

            {!! Form::open(['method' => 'POST', 'class' => 'panel-body form-horizontal form-padding', 'url' => route('user.store')]) !!}
            <div class="panel-body" >
                <div class="panel-body" >
                    @include('backend.users._form')
                </div>
                <div class="panel-footer text-right">
            <button type="reset" class="btn btn-warning wizard-prev-btn btn-rounded mr-auto">Annuler</button>
            <button type="submit"class="btn btn-primary wizard-next-btn btn-rounded ml-auto">Ajouter</button>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('user.index') }}">Back</a>
            </div>
          </div>
            </div>

            {!! Form::close() !!}
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    
@endsection
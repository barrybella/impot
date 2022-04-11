@extends('layouts.admin')
@section('content')
    <div >
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Formulaire de Modification des utilisateurs</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            {!! Form::open(['method' => 'PUT', 'class' => 'panel-body form-horizontal form-padding', 'url' => route('user.update', $user->id)]) !!}
            <div class="panel-body">
                <div class="panel-body">
                    @include('backend.users._form')
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-success" type="submit">Modifier</button>
                     <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('user.index') }}">Back</a>
            </div>
                </div>
            </div>
            {!! Form::close() !!}
            <!--===================================================-->
            <!--End Horizontal Form-->
        </div>
    </div>
    </div>
@endsection

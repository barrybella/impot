@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/js/bootstrap.min.js">
    <link href="{{asset('template/nifty/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('template/nifty/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('template/nifty/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('template/nifty/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('template/nifty/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template/nifty/js/demo/tables-datatables.js')}}"></script>
    <script src="{{asset('template/css/bootstrap.min.css')}}"></script>
    <script src="{{asset('template/css/bootstrap.min.css')}}"></script>
    <script src="{{asset('template/jquery-3.5.1.slim.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('backend/bootstrap/4.5.2/css/bootstrap.min.js')}}" >

   <script src="{{asset('template/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
@endsection
@section('content')
<div class="panel">
    <div class="panel-body text-center">
       <h5>Veuillez choisir le type de taxes</h5>
       <div class="row">
         <div class="col-sm-6 col-lg-4">
                        @php $lastType = ''; @endphp
                        @foreach($taxes as $taxe)
                            @php $currentType = $taxe->taxes @endphp

                            @if($lastType != $currentType)
                                @php $lastType = $currentType; @endphp

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">{{ $taxe->taxes }}</label>   
                                </div>        
                            @endif
                            <div class="form-group">
                              <label for="{{ $taxe->id_taxes }}" class="margin">
                                    <b> {{ $taxe->label}}</b>
                                </label>
                                <input type="checkbox" name="id_taxes[]"
                                    id="{{ $taxe->id_taxes }}"
                                    value="{{ $taxe->id }} ">
                                
                            </div>    
                                                        
                        @endforeach
                    </div>
       </div>
       </br>
       </br>
       </br>
       </br>
     
                 
         <div class="payment-options">
          <h5 class="text-left">Choisissez votre mode de paiement</h5>
           <button class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Orange Monney<img src="{{asset('template/img/org.png')}}" alt="" class="img-circle">
  </button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Mobile Monney<img src="{{asset('template/img/mtn.png')}}" alt="" class="img-circle">
  </button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Stripe<img src="{{asset('template/img/stripe.jpg')}}" alt="" class="img-circle">
  </button>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form>
    <div class="panel-body">   
       <div class="col-sm-6">
    <div class="form-group">
    <label class="control-label">Numero de la carte</label>
       <input type="number" class="form-control">
           </div> 
           </div>   
   <div class="col-sm-6">
      <div class="form-group ">
          <label class="control-label">Code Paiement</label>
          <input type="number" class="form-control">
      </div>
  </div>
</div>
 <div class="col-sm-6">
      <div class="form-group ">
        <label lass="control-label">Date de Paiement</label>
        <input type="date" class="form-control" id="">
      </div>
    </div>
     <div class="col-sm-6">
      <div class="form-group ">
        <label lass="control-label">Montant</label>
        <input type="number" class="form-control" id="" placeholder="Montant a payer ">
      </div>
    </div>                                           
    <div class="text-right">
        <button class="btn btn-success" type="submit">paiement maintenant</button>
    </div>
  </form>
  </div>
</div>
   <div class="text-left">
    <a href="{{route('Payements.index')}}"class="btn btn-primary" type="submit">précédant</a>
      
   </div>
   </div>

   </div>


</div>
@endsection

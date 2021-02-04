@extends('layouts.app')
@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

@endif
<div class="container">
<h1>Detail Truck</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$detailTruck->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$detailTruck->plat}}</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
    
    <br>
    <a href="{{url('/truck')}}" class="card-link"><- back</a>
  </div>
</div>
</div>
@endsection
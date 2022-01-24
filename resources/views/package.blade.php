@extends('layouts.app')
@section('main')
@foreach($flight_packages as $flight_package)
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$flight_package['package_name']}}</h5>
    <p class="card-text">{{$flight_package['checkin_date']}} - {{$flight_package['checkout_date']}}</p>
    <a href="{{ route('flight.show',$flight_package->id)}}" class="btn btn-primary">{{$flight_package['price']}}</a>
  </div>
</div>
@endforeach
@endsection
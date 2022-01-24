@extends('layouts.app')
@section('main')
<h2>Nome Hotel: {{$flight->package_name}}</h2>
<h2>Check-in:{{$flight->checkin_date}} - Check-out:{{$flight->checkout_date}}</h2>
<h2>Prezzo:{{$flight->price}}</h2>
@endsection
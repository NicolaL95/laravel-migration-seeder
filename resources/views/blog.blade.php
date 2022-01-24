@extends('layouts.app_blog')
@section('main')
@foreach($blogs as $blog)
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$blog['title']}}</h5>
    <p class="card-text">{{$blog['description']}}
    <a href="{{ route('blog.show',$blog->id)}}" class="btn btn-primary">Vedi nel dettaglio</a>
  </div>
</div>
@endforeach
@endsection
@extends('layouts.welcome')

@section('products')
@foreach($products as $key)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ $key->product_img_path }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $key->product_name }}</h5>
    <p class="card-text">Description.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Price:{{ $key->product_quantity }}</li>
    <li class="list-group-item">Brand:{{ $key->product_brand }}</li>
    <li class="list-group-item">Uploaded By:{{$key->name}}</li>
  </ul>
  <div class="card-body">
    <a href="product/about/{{$key->id}}" class="card-link">Find out more</a>
    <a href="#" class="card-link"><button type="button" class="btn btn-primary">Add to cart</button></a>
  </div>
</div>
        @endforeach
@endsection

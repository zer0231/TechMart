@extends('layouts.welcome')

@section('products')
<a href="{{ url('/') }}">back</a>
@foreach ($about as $item)
      <img src="/../../{{ $item->product_img_path }}" height="365px" width="365px" alt="..."><br>
          ID:{{ $item->product_id }}<br>
           Name:{{ $item->product_name }}<br>
           Quantity available:{{ $item->product_quantity }}<br>
           From:{{ $item->user_id }}<br>
           Brand:{{ $item->product_brand }}<br>
           <marquee><h1 style="color:#ff0000"><b >сука Блядь</b></h1></marquee>
        @endforeach
@endsection

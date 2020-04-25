@extends('layouts.welcome')

@section('products')
<a href="{{ url('/') }}">back</a>
@foreach ($about as $item)
      <img src="/../../{{ $item->img_path }}" height="365px" width="365px" alt="..."><br>
          ID:{{ $item->id }}<br>
           Name:{{ $item->name }}<br>
           Quantity available:{{ $item->quantity }}<br>
           From:{{ $item->user_id }}<br>
           Brand:{{ $item->brand }}<br>
           <marquee><h1 style="color:#ff0000"><b >сука Блядь</b></h1></marquee>
        @endforeach
@endsection

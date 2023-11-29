@extends('layouts.app')

@section('content')
<a href="{{route('products.index')}}">Products page</a>
<h1>{{$product->name}}</h1>
<h5>{{$product->description}}</h5>

<p>
  Quantity : {{ $product->qty}}
</p>
<p>
  Price : {{ $product->price}}
</p>
@endsection
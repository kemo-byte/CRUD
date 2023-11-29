@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update',['product'=>$product]) }}" method="post">
      @csrf
      @method('put')
      
        @if($errors->any())
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        @enderror
        <input type="text" name="name" placeholder="Name" id="name" value="{{$product->name}}">
        <input type="text" name="price" placeholder="Price" id="price" value="{{$product->price}}">
        <input type="text" name="qty" placeholder="Quantity" id="qty" value="{{$product->qty}}">
        <input type="text" name="description" placeholder="Description" id="description" value="{{$product->description}}">
        <input type="submit" value="create">
    </form>

    <p>
    <a href="{{route('products.index')}}">Back</a>
    </p>
@endsection

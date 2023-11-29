@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.create') }}" method="post">
      @csrf
      @method('post')
      
        @if($errors->any())
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        @enderror
        <input type="text" name="name" placeholder="Name" id="name" value="{{old('name')}}">
        <input type="text" name="price" placeholder="Price" id="price" value="{{old('price')}}">
        <input type="text" name="qty" placeholder="Quantity" id="qty" value="{{old('qty')}}">
        <input type="text" name="description" placeholder="Description" id="desription" value="{{old('description')}}">
        <input type="submit" value="create">
    </form>
@endsection

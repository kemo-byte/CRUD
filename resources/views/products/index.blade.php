@extends('layouts.app')

@section('content')
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  
@if (session()->has('success')) 
  <li>{{session('success')}}</li>
@endif
<table >
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Description</th>
    <th colspan="3">Operations</th>
  </tr>
  @foreach($products as $product)

  <tr>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->qty}}</td>
    <td>{{$product->description}}</td>
    <td><a href="{{route('products.show',['product'=>$product])}}">View</a></td>
    <td><a href="{{route('products.edit',['product'=>$product])}}">Edit</a></td>
    <td>
      <form action="{{route('products.destroy',$product)}}" method="post">
      @csrf
      @method('delete')
      <input type="submit" value="Delete">
      </form>
    </td>
  </tr>
  @endforeach

</table>
<a href="{{route('products.create')}}">Create Products</a>

@endsection
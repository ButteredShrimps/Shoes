@extends('Shoes.layout')
@section('content')
<div class="card">
  <div class="card-header">Shoe Detail</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Brand : {{ $shoes->brand }}</h5>
        <p class="card-text">Size : {{ $shoes->size }} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAverage Difference: {{$diff}}</p>
        <p class="card-text">Color : {{ $shoes->color }}</p>
        <p class="card-text">Price : {{ $shoes->price }}</p>
        <p class="card-text">Supplier : {{ $shoes->supplier }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
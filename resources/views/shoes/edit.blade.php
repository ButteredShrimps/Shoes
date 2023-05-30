@extends('Shoes.layout')
@section('content')
<div class="card">
  <div class="card-header">Shoes Update</div>
  <div class="card-body">
      
      <form action="{{ url('shoe/' .$shoes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$shoes->id}}" id="id" />
        <label>Brand</label></br>
        <input type="text" name="brand" id="brand" value="{{$shoes->brand}}" class="form-control"></br>
        <label>Size</label></br>
        <input type="text" name="size" id="size" value="{{$shoes->size}}" class="form-control"></br>
        <label>Color</label></br>
        <input type="text" name="color" id="color" value="{{$shoes->color}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$shoes->price}}" class="form-control"></br>
        <label>Supplier</label></br>
        <input type="text" name="supplier" id="supplier" value="{{$shoes->supplier}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
@extends('Shoes.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Shoe Register</div>
  <div class="card-body">
      
      <form action="{{ url('shoe') }}" method="post">
        {!! csrf_field() !!}
        <label>Brand</label></br>
        <input type="text" name="brand" id="brand" class="form-control"></br>
        <label>Size</label></br>
        <input type="text" name="size" id="size" class="form-control"></br>
        <label>Color</label></br>
        <input type="text" name="color" id="color" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Supplier</label></br>
        <input type="text" name="supplier" id="supplier" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
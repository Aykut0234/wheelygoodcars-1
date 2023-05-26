@extends('cars.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Bewerk advertentie</div>
  <div class="card-body">
       
      <form action="{{ url('car/' .$cars->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cars->id}}" id="id" />

        <label>license_plate</label></br>
        <input type="text" name="license_plate" id="license_plate" value="{{$cars->license_plate}}" class="form-control"></br>

        <label>make</label></br>
        <input type="text" make="make" id="make" value="{{$cars->make}}" class="form-control"></br>
        
        <label>model</label></br>
        <input type="text" name="model" id="model" value="{{$cars->model}}" class="form-control"></br>
        
        <label>price</label></br>
        <input type="decimal" name="price" id="price" value="{{$cars->price}}" class="form-control"></br>
        
        <label>mileage</label></br>
        <input type="integer" name="mileage" id="mileage" value="{{$cars->mileage}}" class="form-control"></br>
        
        <label>seats</label></br>
        <input type="integer" name="seats" id="seats" value="{{$cars->seats}}" class="form-control"></br>

        <label>doors</label></br>
        <input type="integer" name="doors" id="doors" value="{{$cars->doors}}" class="form-control"></br>

        <label>production_year</label></br>
        <input type="integer" name="production_year" id="production_year" value="{{$cars->production_year}}" class="form-control"></br>

        <label>weight</label></br>
        <input type="integer" name="weight" id="weight" value="{{$cars->weight}}" class="form-control"></br>

        <label>color</label></br>
        <input type="text" name="color" id="color" value="{{$cars->color}}" class="form-control"></br>
        
        

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
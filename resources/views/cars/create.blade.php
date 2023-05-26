@extends('cars.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Maak een nieuw advertentie aan.</div>
  <div class="card-body">
       
      <form action="{{ url('car') }}" method="post">
        {!! csrf_field() !!}

        <label>License plate</label></br>
        <input type="text" name="license_plate" id="license_plate" class="form-control"></br>

        <label>make</label></br>
        <input type="text" name="make" id="make" class="form-control"></br>


        <label>model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>

        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>

        <label>mileage</label></br>
        <input type="text" name="mileage" id="mileage" class="form-control"></br>

        <label>seats</label></br>
        <input type="text" name="seats" id="seats" class="form-control"></br>

        <label>doors</label></br>
        <input type="text" name="doors" id="doors" class="form-control"></br>

        <label>production_year</label></br>
        <input type="text" name="production_year" id="production_year" class="form-control"></br>

        <label>weight</label></br>
        <input type="text" name="weight" id="weight" class="form-control"></br>

        <label>color</label></br>
        <input type="text" name="color" id="color" class="form-control"></br>
        




        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
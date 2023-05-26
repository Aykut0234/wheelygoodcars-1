@extends('cars.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Maak een nieuw advertentie aan.</div>
  <div class="card-body">
       
    <form action="{{ url('car') }}" method="post">
        {!! csrf_field() !!}

        <label>License plate</label></br>
        <input type="text" name="license_plate" id="license_plate" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
     </form>
    
  </div>
</div>
  
@stop
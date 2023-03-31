@extends('layouts.app')

@section('main')

    <form  method="POST" action="{{route('cars.create.step2')}}">
     @csrf
        <input type="text" name="license_plate" class="form-control">
        <input type="submit" class="btn btn-lg btn-primary">
    </form>


@endsection
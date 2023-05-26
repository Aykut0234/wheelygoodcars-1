@extends('cars.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>WheelyGoodCars</h2>
                    </div>
                    <div class="card-body">
                        <h2>Maak een nieuw advertentie</h2>
                        <a href="{{ url('/car/create') }}" class="btn btn-success btn-sm" title="Maak een nieuw advertentie">
                        
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>License plate</th>
                                        <th>make</th>
                                        <th>model</th>
                                        <th>price</th>
                                        <th>mileage</th>
                                        <th>seats</th>
                                        <th>doors</th>
                                        <th>production_year</th>
                                        <th>weight</th>
                                        <th>color</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $car->license_plate }}</td>
                                        <td>{{ $car->make }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->price }}</td>
                                        <td>{{ $car->mileage }}</td>
                                        <td>{{ $car->seats }}</td>
                                        <td>{{ $car->doors }}</td>
                                        <td>{{ $car->production_year }}</td>
                                        <td>{{ $car->weight }}</td>
                                        <td>{{ $car->color }}</td>
                                        
                                        <td>
                                            
                                            <a href="{{ url('/car/' . $car->id . '/edit') }}" title="Edit car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/car' . '/' . $car->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Verwijder advertentie" onclick="return confirm("Weet je het zeker?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
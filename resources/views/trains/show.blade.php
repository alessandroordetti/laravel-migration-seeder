@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mb-5">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Il treno: {{$train->trainCode}}</h5>
                            <p class="card-text">Treno in partenza da {{$train->departureStation}} alle ore {{$train->departureTime}} e in arrivo a {{$train->arrivalStation}} alle ore {{$train->arrivalTime}}</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

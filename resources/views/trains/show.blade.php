@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mb-5">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Il treno: {{$train->trainCode}}</h5>
                            <p class="card-text">Treno in partenza da {{$train->departureStation}} alle ore {{$train->departureTime}} arriverà a {{$train->arrivalStation}} alle ore {{$train->arrivalTime}}</p>
                        </div>
                    </div>
                </div>
        </div>


        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary">
                    <a class="text-white" href="{{route('trains.index')}}">Torna alla Homepage dei treni</a>
                </button>
            </div>
        </div>
    </div>
@endsection

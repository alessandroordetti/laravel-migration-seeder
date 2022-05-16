@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mb-5">
                @foreach ($trains as $train)
                    <div class="col-3">
                            <div class="card mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Il treno: {{$train->trainCode}}</h5>
                                    <p class="card-text">Treno in partenza da {{$train->departureStation}} alle ore {{$train->departureTime}} e in arrivo a {{$train->arrivalStation}} alle ore {{$train->arrivalTime}}</p>
                                    <a href='{{url("/$train->id")}}' class="btn btn-primary">Vai ai dettagli del treno</a>
                                </div>
                            </div>
                    </div>
                @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                {{$trains->links()}}
            </div>
        </div>
    </div>
@endsection

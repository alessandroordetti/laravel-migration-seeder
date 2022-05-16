@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mb-5">
                @foreach ($trains as $train)
                    <div class="col-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$train->trainCode}}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

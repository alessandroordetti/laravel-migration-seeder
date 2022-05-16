<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>

    @dump($getTime)
    @dump($trains)

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($getTime as $element)
                    <h1>Il treno in partenza il {{$element->departureTime}} parte al binario 4</h1>
                @endforeach
            </div>

            <div>
                <h2>I treni in partenza oggi sono:</h2>
                @foreach ($trains as $train)
                    {{$train->trainCode}}
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
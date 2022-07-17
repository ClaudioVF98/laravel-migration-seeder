<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($trains as $train)
            <div class="train">
                <p>Azienda: {{$train->azienda}}</p>
                <p>Stazione di partenza: {{$train->stazione_di_partenza}}</p>
                <p>Stazione di arrivo:{{$train->stazione_di_arrivo}}</p>
                <p>Orario di partenza: {{$train->orario_di_partenza}}</p>
                <p>Orario di arrivo: {{$train->orario_di_arrivo}}</p>
                <p>Codice treno: {{$train->codice_treno}}</p>
                <p>Numero carrozze: {{$train->numero_carrozze}}</p>
                <p>In orario: {{$train->in_orario}}</p>
                <p>Cancellato: @if ($train->cancellato === 1) yes @else No @endif</p>
            </div>
        @endforeach
    </div>
</body>
</html>

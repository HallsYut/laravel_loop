<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loopfor Detail</title>
</head>
<body>
    {{-- {{ dd($loopfor) }} --}}

    @for ($i = 0; $i < count($loopfor); $i++)
    <h3> {{ $loopfor[$i] }} </h3>
    @endfor

    
</body>
</html>
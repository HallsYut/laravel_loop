<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Foreach</title>
</head>
<body>
    {{-- {{ dd($loopforeach) }} --}}

    @foreach ($loopforeach as $value)
        <h3> {{ $value }} </h3>
    @endforeach

</body>
</html>
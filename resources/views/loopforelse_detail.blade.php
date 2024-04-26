<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Forelse</title>
</head>
<body>
    {{-- {{ dd($loopforelse) }} --}}

    @forelse ($loopforelse as $value)
        <h3> {{ $value }} </h3>
    @empty
        <h3>ไม่มีข้อมูลในระบบ</h3>
    @endforelse

</body>
</html>
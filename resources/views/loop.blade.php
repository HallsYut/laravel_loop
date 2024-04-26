<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
</head>
<body>
    <h3>
        <a href="{{ Route('loopfor_detail', [
                                            'item1'=>'รายการที่ 1',
                                            'item2'=>'รายการที่ 2',
                                            'item3'=>'รายการที่ 3'
                                            ]) }}">
            Loop for
        </a>
    </h3>

    <h3>
        <a href="{{ Route('loopforeach_detail', [
                                                'item1'=>'รายการที่ 1',
                                                'item2'=>'รายการที่ 2',
                                                'item3'=>'รายการที่ 3'
                                                ]) }}">
            Loop foreach
        </a>
    </h3>

    <h3>
        <a href="{{ Route('loopforelse_detail', [
                                                 'item1'=>'รายการที่ 1',
                                                 'item2'=>'รายการที่ 2',
                                                 'item3'=>'รายการที่ 3'
                                                ]) }}">
            Loop forelse
        </a>
    </h3>

    <h3>
        <a href="{{ Route('loopwhile_detail', [
                                               'item1'=>'รายการที่ 1',
                                               'item2'=>'รายการที่ 2',
                                               'item3'=>'รายการที่ 3'
                                              ]) }}">
            Loop while
        </a>
    </h3>

</body>
</html>
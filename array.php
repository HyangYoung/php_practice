<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>title</title>
</head>

<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('a', 'b', 'c'); //배열은 수납상자
    echo $coworkers[2].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, 'd');
    ?>
</body>
</html>



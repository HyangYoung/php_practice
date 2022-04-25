<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>title</title>
</head>

<body>
    <h1>Functions</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
    }
        basic();
        basic();
        basic();
    ?>

    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $right){
        print($left+$right);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>

    <?php
    function sum2($left, $right){
        return $left+$right;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum2(2,4));
    ?>

</body>
</html>

<?php
function print_title(){
    if(isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<h1><a href="index.php">WEB</a></h1>
<!--data 디렉토리에 있는 파일을 가져오고, 파일의 목록 하나하나를 li와 a태그를 이용해서 글목록을 만드세요.-->
<!--site:php.net, php loop statements-->
<ol>
    <?php
        $list = scandir('./data');

        $i = 2;
        while ($i < count($list)){
            if($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
            $i = $i + 1;
        }
    ?>
</ol>

<h2>
    <?php
    print_title();
    ?>
</h2>

<?php
print_title();
?>

</body>
</html>
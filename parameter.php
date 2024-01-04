<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    안녕하세요. egoing 님

    parameter.php?name=egoing

    $name=$_GET['name'];
    안녕하세요. <?=$name ?>님

    $name=$_GET['name'];
    $address=$_GET['address'];
    안녕하세요. $address에 사시는 <?=$name ?>님
</body>
</html>
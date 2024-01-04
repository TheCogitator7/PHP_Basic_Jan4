<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
    </ol>
    <h2><?=$_GET['id'] ?></h2>    
    //data/id 값에 해당하는 파일의 내용;
    //보안적인 내용을 고려하지 않고 있음. 코드 다시 짜야할 것.
    <?= file_get_contents("data/HTML"); ?>
    <?= file_get_contents("data/".$_GET['id']); ?>
</body>
</html>
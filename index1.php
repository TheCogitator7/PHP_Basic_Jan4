<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web1 - Welcome</title>
    </head>
    <body>
        <h1><a href="index.php">Web</a></h1>
        <ol>
            <?php
            $lists=scandir('data');
            foreach($lists as $list){
                if(in_array($list, ['.', '..']))
                continue;
            ?>
            <li><a href="index.php?id=<?=$list ?>"><?=$list ?></a></li>
            <?php
            }
            ?>
        </ol>
        <h2><?=$_GET['id'] ?></h2>
        <?=file_get_contents("data/{$_GET['id']}")?>
    </body>
</html>l
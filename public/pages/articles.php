<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $content['articles']; ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    
    .list p{
        
    }
    
    .code {
        display: inline-block;
        padding: 5px;
        background-color: #000;
        color: #fff;
    }
    
</style>
<body>
    <?php
        include "../../database/connection.php";
    ?>

    <a href="/">home</a>

    <ul class="list">

        <li>
            <p>
                Имя файла исполняемого в данный момент скрипта относительно корня документа
                <span class="code">$_SERVER['PHP_SELF']</span>:
                <span><?php echo $_SERVER['PHP_SELF']?></span>
            </p>
        </li>

        <li>
            <p>
                Корневой каталог документа, в котором выполняется текущий скрипт, как определено в файле конфигурации сервера.
                <span class="code">$_SERVER['DOCUMENT_ROOT']</span>:
                <span><?php echo $_SERVER['DOCUMENT_ROOT'] ?></span>
            </p>
        </li>

        <li>
            <p>
                Содержимое заголовка Host: из текущего запроса, если таковой имеется.
                <span class="code">$_SERVER['HTTP_HOST']</span>:
                <span><?php echo $_SERVER['HTTP_HOST'] ?></span>
            </p>
        </li>

        <li>
            <?php echo print_r( $_SERVER ) ?>
        </li>

        <?php
            foreach ($_SERVER as $key) {
                echo '<li><p>' . $key . '</p></li>';
            }
        ?>
    </ul>


</body>
</html>
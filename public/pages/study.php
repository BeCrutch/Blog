<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .title {
        text-align: center;
    }
</style>
<body>

<div>

    <?php
    #числа
    $integer_1 = 10;
    $integer_2 = 5;
    $integer_3 = 2;
    $float = 12.25;
    #строки
    $string_1 = 'Roman';//строка
    $string_2 = "Naumenko";//строка, ковычки не имеют значения
    #массивы
    $array_1 = array( 99, 98, 97, 96, 95 );
    $array_2 = array(  //массив по ключ => значение
        'Design' => array(
            'first' => 'Оля',
            'second' => 'Татьяна'
        ),
        'FrontEnd' => 'Роман',
        'BackEnd' => array(
            'first' => 'Денис',
            'second' => 'Александр'
        ),
        'Content' => 'Анна'
    );
    #булево значение
    $boolean = true;

    ?>

</div>



<div class="title">
    <p>

        <?php
        $a1 = 'roma';
        echo gettype( $a1 );
        if (is_int($a1)) {
            echo 'integer';
        } else {
            echo 'no_integer';
        }
        ?>
    </p>

    <!--Разница между кавычками для (оптимизации нагрузки страницы) в целях производительности-->
    <p>
        <span><?echo 'dev: $string_1'?></span> <!--Обрабадываться как обычный текст '' -->
        <span><?echo "dev: $string_1"?></span> <!--Обрабадываться как переменноу "" -->
    </p>
    <!-- -->

    <input type="text" value="<?php echo $boolean ?>">


    <!-- Канкатенация -->
    <p><?echo $string_1 . ' ' . $string_2 ?> </p>
    <!-- -->

    <!-- Математические действия (+ - / * %)  '(10 + 5) / 2 * 10 % 2 = 1' -->
    <p><?echo ($integer_1 + $integer_2) / $integer_3 * $integer_1 % $integer_3  ?></p>
    <!-- -->

    <!-- if else > < >= <= != and or ! -->
    <p>
        <?
        if (!$boolean) {
            echo "true";
        } else {
            echo "false";
        }
        ?>
    </p>
    <!-- -->


    <!-- Циклы  (for, while, foreach)-->
    <p>
        <?
        for($i = 0; $i <= 10; $i++ ) {
            echo "$i ";
        }
        ?>
    </p>
    <p>
        <?
        while ( $i <= 20) {
            echo "$i ";
            $i++;
        }
        ?>
    </p>
    <p>
        <?
        foreach ($array_2 as $key) {
            echo "$key ";
        }
        ?>
    </p>
    <!-- -->

    <!-- Функция -->
    <!-- public, protected или private. Доступ к свойствам и методам класса, объявленным как public (общедоступный), разрешен отовсюду. Модификатор protected (защищенный) разрешает доступ самому классу, наследующим его классам и родительским классам. Модификатор private (закрытый) ограничивает область видимости так, что только класс, где объявлен сам элемент, имеет к нему доступ -->
    <?
    function myfunction($a)
    {
        return "<h1>Число $a</h1>";
    }
    ?>
    <p>
        <?
        $fun = myfunction($float);
        echo $fun
        ?>
    </p>
    <!-- -->

    <!-- Математические функции (abs, round, ceil, float, rand, min, max) -->


    <!--  -->

    <?php
    #mysqli_close($connection);
    $uri = urldecode(
        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
    );

    echo '<div>' . $uri . '</div>';
    ?>

</div>
</body>
</html>
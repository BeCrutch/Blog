<?php

    include "config.php";

    $connection = mysqli_connect(
        $db['server'],
        $db['username'],
        $db['password'],
        $db['name']
    );

    if ($connection == false) {
        echo '<div class="not-connect"></div>';
        exit();
    } else {
        echo '<div class="connect"></div>';
    }
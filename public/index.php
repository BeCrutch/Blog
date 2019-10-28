<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $content['title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

    include "../database/connection.php";
    include('components/header.php');

?>

<?php

    mysqli_close($connection);

?>

</body>
</html>

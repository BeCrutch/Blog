
<header>

    <ul>

        <?php

        $result = mysqli_query($connection, "SELECT * FROM `categories`");

        while (($record = mysqli_fetch_assoc($result))) {

            $ac = mysqli_query($connection, "SELECT COUNT('id') AS 'total_count' FROM `articles` WHERE `categoruID` = " . $record['id'] );

            $acr = mysqli_fetch_assoc($ac);

            echo '<li><a href="pages/articles.php">' . $record['title'] . '</a>' . ' (' . $acr['total_count'] . ')' . '</li>';
        }

        ?>

    </ul>

</header>
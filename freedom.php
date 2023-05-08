<?php
    session_start();
    if (isset($_SESSION['x'])) {
        $x = $_SESSION['x'];
    } else {
        $x = 0;
        $_SESSION['x'] = $x;
        // var_dump($_SESSION);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
        <div class="content">
            <?php
                if ($x == 5) {
                    echo "<h1>Congratulations! You managed to escape from the escape room with some bonus!</h1>";
                    echo "<img src='img/freedom2.png' class='freedom' alt='freedom' />";
                } else {
                    echo "<h1>Congratulations! You managed to escape from the escape room!</h1>";
                    echo "<img src='img/freedom.png' class='freedom' alt='freedom' />";
                }
            ?>
            <h1><a href="restart.php">Restart</a></h1>
        </div>
    </div>
</body>
</html>

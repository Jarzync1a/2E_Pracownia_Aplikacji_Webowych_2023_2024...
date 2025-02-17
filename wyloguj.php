<?php
    session_start();
    if(isset($_SESSION['log'])){
        unset($_SESSION['log']);
    } else {
        header('location: loguj.php');
        exit();
    }

    $s = session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-hash_equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Wylogowałes sie ze strony</p>
    <a href ="loguj.php">Zaloguj sie</a>
</body>
</html>
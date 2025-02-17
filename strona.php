<?php
        session_start();
        if(!isset($_SESSION['log'])) {
            header('location: loguj.php');
            exit();
        }
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
    <?php
        $imie = ucfirst($_SESSION['log']);
        echo "Witaj " . $imie;
    ?>
    <p> Jestes na stronir głownej.</p>
    <p> Przed opuszczeniem storony wyloguj sie. </p>
    <a href="wyloguj.php"> Wyloguj </a>
</body>
</html>
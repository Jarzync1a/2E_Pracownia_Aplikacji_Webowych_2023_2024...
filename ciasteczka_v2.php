<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $mies = 2592000 + time();
        setcookie("wizyta", date("F js - g:ia"),$mies);

        if(isset($_COOKIE["wizyta"])) {
            $ostatnia = $_COOKIE["wizyta"];
            echo "Witamy ponownie! Twoja ostania wizyta była." .
                $ostatnia;
        } else {
            echo "Witamy na naszej stornie.";
        }
    ?>
</body>
</html>
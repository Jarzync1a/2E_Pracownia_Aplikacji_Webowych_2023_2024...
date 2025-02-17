<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("Pismo", "na skróty", time()+3600, "/", "localhost",
        false);

        if(isset($_COOKIE["Pismo"])) {
            echo "Jesteś naszym klientem.";
        } else {
            echo "witamy na naszej stornie.";
        }
    ?>
</body>
</html>
<?php
    session_start();
    if(isset($_SESSION['log'])) {
        header('location: strona.php');
        exit();
    } elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])){
        if($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan23') {
            $_SESSION['log'] = $_POST['nazwa'];
            header('location: strona.php');
            exit();
       
        } else {
                echo "Nie prawidłowe dane logowania <br />";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p.fo {
            font-weight: bold;
            font-size: 11pt;
        }
        #log {
            font-weight: bold;
            font-size: 14pt;
        }
    </style>
</head>
<body>
    <div>
        <form action="http://localhost/loguj.php" method="POST">
            <p id="log">Logowanie</p>
            <p class = "fo">Nazwa Urzytkownika</p>
            <input type="text" name="nazwa" value = "" size="25"><br/>
            <p class = "fo"> Haslo: </p>
            <input type="password" name="haslo" value= "" size ="25">
            <input type="submit" value="Zaloguj sie">
    </form>
    </div>
</body>
</html>
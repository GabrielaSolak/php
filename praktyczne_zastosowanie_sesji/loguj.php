<?php

session_start();

if(isSet($_SESSION['log']))
{
    header('location: strona.php');
    exit();
}
else if (isSet($_POST['nazwa']) && isSet($_POST['haslo']))
{
    if ($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan23')
    {
        $_SESSION['log'] == 'nazwa';
        header('location: strona.php');
        exit();
    }
    else
    {
        echo "Nieprawidłowe dane logowania <br>";
    }
}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Autoryzacja danych</title>
        <meta http-equiv="Content-Type" cantent="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            <form action="http://localhost/loguj.php" method="post">
                <b>Logowanie</b><br>
                <b>Nazwa użytkownika</b><br>
                <input type=text name="nazwa" value="" size="25"><br>
                <b>Hasło<b><br>
                <input type=password name="haslo" value="" size="25"><br>
                <input type="submit" value="Zaloguj się">
            </form>
        </div>
    </body>
</html>
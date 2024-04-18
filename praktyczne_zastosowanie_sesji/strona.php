<?php
session_start();
if(!isSet($_SESSION['log']))
{
    header("location: loguj.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Strona główna</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p>Jesteś na stronie głównej</p>
        <p>Przed opuszczeniem strony wyloguj się!<p>
            <a href = "wyloguj.php">Wylogj</a>
    </body>
</html>






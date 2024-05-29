<?php 
    $pol = mysqli_connect('localhost', 'root', '', 'portal');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portal społecznościowy</title>
        <link rel="stylesheet" type="text/css" href="styl5.css">
    </head>
    <body>
        <div id="baner_l">
            <h2>Nasze osiedle</h2>
        </div>

        <div id="baner_p">
            <!--skrypt 1-->
            <?php 
                $zapytanie = "SELECT COUNT(*) FROM uzytkownicy";
                mysqli_query($pol, $zapytanie);

                echo "<h5>Liczba użytkowników portalu:".$zapytanie."</h5>";
            ?>
        </div>

        <div id="lewy">
            <h3>Logowanie</h3>
            <form method="post">
                Login<br>
                <input type="text" name="login"><br>
                Hasło<br>
                <input type="password" name="haslo"><br>
                <button type="submit">Zaloguj</button>
            </form>
        </div>

        <div id="prawy">
            <h3>Wizytówka</h3>
            <!--skrypt 2-->
            <?php 
                if(isset($_POST['login']) && isset($_POST['haslo']))
                {
                    //$zapytanie1 = "SELECT * FROM uzytkownicy WHERE login = $_POST['login']";
                }
            ?>
        </div>

        <div id="stopka">
            Stronę wykonał: xxxxxxxxxxx
        </div>
    </body>
</html>
<?php 
    msqli_close($pol);
?>
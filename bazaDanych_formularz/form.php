<html>
    <head>
        <title>Forms</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Rejestracja klientów</h3>

        <form action="bazy_form.php" method="post">

            <?php
            $pol = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
            $zapyt4 = "SELECT * FROM klient WHERE Id_klienta = 1";
            $wynik4 = mysqli_query($pol, $zapyt4);
            $dane = mysqli_fetch_array($wynik4);
            ?>

            Nazwisko<br>
            <input type="text" name="nazwisko" value="<?php echo $dane['Nazwisko']; ?>"><br>
            Imie<br>
            <input type="text" name="imie" value="<?php echo $dane['Imie']; ?>"><br>
            Kod pocztowy<br>
            <input type="text" name="kod_p" value="<?php echo $dane['Kod_pocztowy']; ?>"><br>
            Miejscowość<br>
            <input type="text" name="miejscowosc" value="<?php echo $dane['Miejscowosc']; ?>"><br>
            Ulica<br>
            <input type="text" name="ulica" value="<?php echo $dane['Ulica']; ?>"><br>
            Nr domu<br>
            <input type="number" name="nr_domu" value="<?php echo $dane['Nr_domu']; ?>"><br>
            Pesel<br>
            <input type="text" name="pesel" value="<?php echo $dane['PESEL']; ?>"><br>
            Nr telefonu<br>
            <input type="number" name="nr_telefonu" value="<?php echo $dane['Telefon']; ?>"><br>
            Adres email<br>
            <input type="text" name="email" value="<?php echo $dane['AdresEmail']; ?>"><br><br>

            <input type="reset" value="Resetuj">
            <input type="submit" value="Wyślij dane">
        </form>
    </body>
</html>
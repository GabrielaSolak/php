<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
    table
    {
        border:solid 5px black;
        border-collapse: collapse;
    }
    th, td
    {
        border:solid 2px pink;
        border-collapse: collapse;
    }

    
</style>

</head>
<body>
<?php
/*
T: Tworzenie bazy z poziomu PHP
*/

//nawiazanie polaczenia (nie wybpieramy bazy)
$pol = mysqli_connect('localhost', 'root', '');

// tworzymy baze szkola
$tbaza = "CREATE DATABASE if not exists szkola";
$w1 = mysqli_query($pol, $tbaza);

//wybierami baze szkola, zeby stworzyc jej strukture
if(mysqli_select_db($pol, 'szkola'))
{
    echo "Wybrano baze szkola<br>";
}
else
{
    exit ("Nie ma dostępu do bazy<br>");
}

//tworzenie tabeli
$tab1 = "CREATE TABLE IF NOT EXISTS uczen (id_ucznia int AUTO_INCREMENT PRIMARY KEY, id_klasy int, 
imie varchar(20), nazwisko varchar(25), adres varchar(30))";
$w2 = mysqli_query($pol, $tab1);

$tab2 = "CREATE TABLE IF NOT EXISTS klasa (id_klasy int AUTO_INCREMENT PRIMARY KEY, symbol varchar(4))";
$w3 = mysqli_query($pol, $tab2);

//dodawanie do tabeli
$dod1 = "INSERT INTO uczen VALUES (null, '2tp', 'Gabriela', 'Solak', 'Tarnow'), (null, '2tp', 'Lena', 'Czciók', 'Tarnow')";
//$w4 = mysqli_query($pol, $dod1);
echo "Dodano uczniów w liczbie: ".mysqli_affected_rows($pol)."<br>";

//pobieranie imion i nazwisk uczniow i wyswietlanie je w tabeli
$z1 = "SELECT * FROM uczen";
$w5 = mysqli_query($pol, $z1);
while($tab3 = mysqli_fetch_array($w5))
{
    echo $tab3['imie']." ".$tab3['nazwisko']."<br>";
}

//pobranie symboli klas i wyswietlenie je w formie listy uporzadkowanej

?>
</body>
</html>
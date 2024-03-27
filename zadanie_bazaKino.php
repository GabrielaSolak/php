<?php
$pol = mysqli_connect('localhost', 'root', '');

$cBaza = "CREATE DATABASE IF NOT EXISTS kino";
$w = mysqli_query($pol, $cBaza);

if(mysqli_select_db($pol, 'kino'))
{
    echo "wszystko ok<br>";
}
else
{
    exit("Błąd połączenia");
}

$c_t_filmy = "CREATE TABLE if not exists filmy (Id_filmu int Auto_increment Primary key, Tytul_filmu varchar(30), 
Rezyser varchar(30), Rok_prod int(4))";
$w1 = mysqli_query($pol, $c_t_filmy);

$c_t_klient = "CREATE TABLE if not exists klient (Id_klienta int Auto_increment Primary key, Nazwisko_imie varchar(40))";
$w2 = mysqli_query($pol, $c_t_klient);

$dod_f = "INSERT INTO filmy VALUES (null, 'Avengers', 'rez', 2018), (null, 'Pieraci z Karaibow', 'rez1', 2007)";
//$w3 = mysqli_query($pol, $dod_f);

$dod_k = "INSERT INTO klient VALUES (null, 'Gabriela Solak')";
//$w4 = mysqli_query($pol, $dod_k);

echo mysqli_affected_rows($pol);
?>
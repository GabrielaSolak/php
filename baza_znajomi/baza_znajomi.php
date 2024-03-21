<?php
// 1
$pol = mysqli_connect('localhost', 'root', '', 'znajomi');

// 2, 3
$zapyt1 = "SELECT * FROM osoby WHERE Nazwisko = 'Trawa'";
$wynik = mysqli_query($pol, $zapyt1);

$tab = mysqli_fetch_row($wynik);
echo $tab[0];

$id_osoby = $tab[0];
$zapyt2 = "SELECT * FROM kontakty WHERE Id_osoby = $id_osoby";
$wynik2 = mysqli_query($pol, $zapyt2);
while($tab2 = mysqli_fetch_array($wynik2))
{
    echo $tab2['Kontakt'].", ";
}

// 4
$zapyt4 = "INSERT INTO kontakty VALUES (null, '$id_osoby', 'telefon firmowy', '212121212')";
$wynik4 = mysqli_query($pol, $zapyt4);

// 5
$zapyt3 = "INSERT INTO osoby VALUES (null, 'Gabriela', 'Solak', '2007-01-26', 17)";
$wynik3 = mysqli_query($pol, $zapyt3);
//echo "<br>Dodano dane klientów w liczbie: ".mysqli_affected_rows($pol);

// 6
$zapyt5 = "INSERT INTO kontakty VALUES (null, '', 'poczta szkolna', 'g.solak.tp22@zsme.tarnow.pl')";
$wynik5 =  mysqli_query($pol, $zapyt5);
//echo "<br>Dodano kontakt liczbie: ".mysqli_affected_rows($pol);

?>

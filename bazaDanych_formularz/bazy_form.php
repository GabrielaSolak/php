<?php
$pol = mysqli_connect('localhost', 'root', '', 'ksiegarnia');

//dodanie jednego klienta
$zapyt1 = "INSERT INTO klient VALUES (null, 'Mysza', 'Ola', '33-100', 'Tarnow', 'Lesna', '12/4', 122112121212, 121212121, 'ola@ola.pl')";
$wynik1 = mysqli_query($pol, $zapyt1);
echo "Dodano dane klientów w liczbie: ".mysqli_affected_rows($pol);

//dodawanie dwoch klientow
$zapyt2 = "INSERT INTO klient VALUES (null, 'Czcók', 'Lena', '00-000', 'Luszowice', 'afjasdjk', '12/4', 12121212122, 121212121, 'lskfd@ksj'), (null, 'Gabriela', 'Solak', '00-000', 'Bogumilowice', 'afjasdjk', '12/4', 12121212122, 121212121, 'lskfd@ksj')";
$wynik2 = mysqli_query($pol, $zapyt2);
// echo mysqli_error($pol); //w razie błędu pokazuje gdzie jest, zwraca a nie wyswietla
echo "<br>Dodano dane klientów w liczbie: ".mysqli_affected_rows($pol)."<br><br>";


//przetwarzanie danych z formularza
$nazw = $_POST['nazwisko'];
$im = $_POST['imie'];
$kod_p = $_POST['kod_p'];
$msc = $_POST['miejscowosc'];
$ul = $_POST['ulica'];
$nrD = $_POST['nr_domu'];
$pes = $_POST['pesel'];
$tel = $_POST['nr_telefonu'];
$mail = $_POST['email'];

$zapyt3 = "INSERT INTO klient VALUES (null, '$nazw', '$im', '$kod_p', '$msc', '$ul', '$nrD', '$pes', '$tel', '$mail')";
$wynik3 = mysqli_query($pol, $zapyt3);
echo "<br>Dodano dane klientów w liczbie: ".mysqli_affected_rows($pol)."<br><br>";



$zapyt5 = "UPDATE klient SET Nazwisko='$nazw', Imie='$im', Kod_pocztowy='$kod_p', Miejscowosc='$msc', Ulica='$ul', Nr_domu='$nrD', PESEL='$pes', Telefon='$tel', AdresEmail='$mail' WHERE Id_klienta = 1";
$wynik5 = mysqli_query($pol, $zapyt5);
echo "<br>Zuaktualizowano dane: ".mysqli_affected_rows($pol);

//cw.
$zapyt6 = "UPDATE klient SET PESEL=12321234543 WHERE PESEL = 0";
$wynik6 = mysqli_query($pol, $zapyt6);
echo "<br>Zuaktualizowano: ".mysqli_affected_rows($pol);



//zamykanie polaczenia
mysqli_close($pol);
?>
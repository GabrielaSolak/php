<?php
/*
Funkcje:
- isSet() - sprawdza czy w tablicy na serwerze pod podanym kluczem znajduje się wartosc
- empty() - sprawdza czy w tablicy pod podanym kluczem nie ma wartosci

metoda - tablica
get - $_GET             $_GET['klucz']
post - $_POST           $_POST['klucz'] wartosci atrybutu name kontrolek formularza  
*/

echo "<u>Przesłałeś następujące informacje:</u> <br>";
echo "Imie -> ".$_GET['imie']."<br>";
echo "Nazwisko -> ".$_GET['nazwisko']."<br>";
echo "Wiek -> ".$_GET['wiek']."<br>";
echo "Email -> ".$_GET['email']."<br>";
echo "Wyksztalczenie -> ".$_GET['w']."<br>";
echo "Zgoda -> ".$_GET['zgoda']."<br>";






?>
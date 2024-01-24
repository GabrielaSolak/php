<?php
/*
Funkcje:
- isSet() - sprawdza czy w tablicy na serwerze pod podanym kluczem znajduje się wartosc
- empty() - sprawdza czy w tablicy pod podanym kluczem nie ma wartosci

metoda - tablica
get - $_GET             $_GET['klucz'] (jawne dane)
post - $_POST           $_POST['klucz'] wartosci atrybutu name kontrolek formularza 
*/

echo "<u>Przesłałeś następujące informacje:</u> <br><br>";
echo "Imie -> ".$_POST['imie']."<br>";
echo "Nazwisko -> ".$_POST['nazwisko']."<br>";
echo "Wiek -> ".$_POST['wiek']."<br>";
echo "Email -> ".$_POST['email']."<br>";
echo "Wyksztalczenie -> ".$_POST['w']."<br>";
//echo "Język -> ".$_POST['jezyk']."<br>";
//echo "Język -> ".$_POST['jezyk'][0]."<br>"; //tworzy sie tablica dwuwymiarowa;
//sposob 1
echo "Język -> ";
foreach($_POST['jezyk'] as $j)
{
    echo $j.", ";
}
echo "<br>";
//sposob 2
echo 'Jezyk: ';
echo "<ul>";
foreach($_POST['jezyk'] as $j)
{
    echo "<li>".$j."</li>";
}
echo "</ul><br>";

echo "Zgoda -> ".$_POST['zgoda']."<br>";

?>

<?php
/*
Funkcje:
- isSet() - sprawdza czy w tablicy na serwerze pod podanym kluczem znajduje się wartosc
- empty() - sprawdza czy w tablicy pod podanym kluczem nie ma wartosci

metoda - tablica
get - $_GET             $_GET['klucz'] (jawne dane, dokleja dane do url)
post - $_POST           $_POST['klucz'] wartosci atrybutu name kontrolek formularza 
*/

echo "<u>Przesłałeś następujące informacje:</u> <br><br>";

if($_POST['imie'] === ''|| $_POST['nazwisko'] === '' || $_POST['email'] === '') //empty($_POST['email'])
{
    echo "<p style='color:red'>Nie wprowadziles podstawowych informacji</p>";
}
else{
    echo "Imie -> ".$_POST['imie']."<br>";
    echo "Nazwisko -> ".$_POST['nazwisko']."<br>";
    echo "Email -> ".$_POST['email']."<br>";
}

if($_POST['wiek'] > 0){
    echo "Wiek -> ".$_POST['wiek']."<br>";
}
else{
    echo "<p style='color:red'>Nie poprawna wartość w polu wiek</p>";
}

if(isset($_POST['w'])){ //sprawdza czy jest wartosc, jesli nie to pojawia sie komunikat
    echo "Wyksztalczenie -> ".$_POST['w']."<br>";
}
else{
    echo "<p style='color:red'>Nie zaznaczyles wykształcenia!</p>";
}
//echo "Język -> ".$_POST['jezyk']."<br>";
//echo "Język -> ".$_POST['jezyk'][0]."<br>"; //tworzy sie tablica dwuwymiarowa;
//sposob 1
if(empty($_POST['jezyk'])){ //sprawdza czy pole jest puste
    echo "<p style='color:red'>Nie zaznaczyles języka! (1)</p>";
}
else{
    echo "Język -> ";
    foreach($_POST['jezyk'] as $j)
    {
        echo $j.", ";
    }
    echo "<br>";
}
//sposob 2
if(empty($_POST['jezyk'])){ //sprawdza czy pole jest puste
    echo "<p style='color:red'>Nie zaznaczyles języka! (2)</p>";
}
else{
    echo 'Jezyk: ';
    echo "<ul>";
    foreach($_POST['jezyk'] as $j)
    {
        echo "<li>".$j."</li>";
    }
    echo "</ul><br>";
}

if(!isset($_POST['zgoda'])){
    echo "<p style='color:red'>Nie zostales zarejestrowany</p>";
}
else{
    echo "Zgoda -> ".$_POST['zgoda']."<br><br>";
}

// scieżka dostępu (tymczasowa lokalizacja) - nazwa pliku - rozszerzenie/typ - rozmiar
// $_FILES[nazwa_pola][name(nazwa_pliku) || sizee(rozmiarpliku) || type(typ pliku) || tmp_name(lokalizacja tymczasowa)]
echo "Przekazałeś plik: <br>";
echo "Nazwa pliku: ".$_FILES['plik1']['name']."<br>";
echo "Lokalizacja tymczasowa: ".$_FILES['plik1']['tmp_name']."<br>";
echo "Rozmiar pliku: ".$_FILES['plik1']['size']."<br>";
echo "Typ pliku: ".$_FILES['plik1']['type']."<br>";

// move_aploaded_file() - przenosi pliki z lokalizacji tymczasowej do lokalizacji docelowej
// is_uploaded_file - sprawdzqa czy plik został przesłany

?>

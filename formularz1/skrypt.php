<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.</br>";
echo "Wprowadzone dane:</br>";
echo "Nazwisko:".$_POST['nazw']."<br />";
echo "Imię:".$_POST['imie']."<br />";
echo "Zawód:".$_POST['zaw']."<br />";
echo "Adres e-mail:".$_POST['adr']."<br />";

if(!isset($_POST['wykszt'])){
	echo "Proszę zaznaczyć pole Wykształcenie.";
}
else{
	echo "Wykształcenie:".$_POST['wykszt']."</br>";
}
echo "Dodatkowe uprawnienia:";
if(!empty($_POST['upr'])) {
	echo "<ul>";
	foreach ($_POST['upr']as $wartosc) {
		 "<ol>$wartosc</ol>";
	}
	echo "</ul>";
}
else {
	echo "<p>".$_POST['zaw']." nie zna żadnego języka.<p>";
}
echo "<br />";

if(!empty($_POST['opcje'])){
	echo "Nie zgadza się na przetwarzanie danych osobowych.";	
}

else{
	echo "Zgadza się na przetwarzanie danych osobowych.";
}

echo "<br />";
?>
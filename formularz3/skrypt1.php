<?php
//-----------form_1-------------
if($_POST['login'] === ''){
    echo 'Nie wypełniłeś pola login<br>';
}
if(strlen($_POST["haslo"]) < 5){
    echo 'Hasło powinno mieć przynajmniej 5 znaków<br>';
}
else{
    echo "Zalogowałeś się jako ".$_POST['login'];
}
?>
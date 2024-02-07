<?php
//-----------form_2-------------
echo "Zgłosiłeś ".$_POST['zgloszenie']."<br>";

if($_POST['biuro'] < 1 || $_POST['biuro'] > 42)
{
    echo "Nie ma u nas biura o podanym numerze"."<br>";
}
else{
    echo "Awaria w biurze ".$_POST['biuro'].", ".$_POST['pietro']."<br>";
}

if(!empty($_POST['opis']))
{
    echo 'Szczegóły zgłoszenia: '.$_POST['opis'];
}
?>
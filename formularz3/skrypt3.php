<?php
//-----------form_3-------------
if(!empty($_POST['imienazwisko'])){
    echo $_POST['imienazwisko']." twoja reklamacja została przyjęta";
}
if($_FILES['plik1']['type'] == 'text/plain'){
    echo "Przesłałeś plik właściwego typu";
}
else{
    echo "Przesłałeś plik typu ".$_FILES['plik1']['type'];
}
?>
<?php
$userall = array();
$user = array();

$datei = "daten.txt";
$handle = fopen($datei, "r");
$alldata = fread($handle, filesize("daten.txt"));
$userall = explode(' ', $alldata);
$fehler = false;


if(isset($_POST['email']) && $_POST['passwort']){
    for ($i=0; $i < count(file($datei)); $i++) { 
        $user = explode(';', $userall[$i]);
        if(($user[0] == $_POST['email']) && ($user[1] == $_POST['passwort'])) echo "Hallo ".$user[2]." ".$user[3];
    }
    $fehler = true;
}else{
    header("Location: login.php");
}

if($fehler){
    header("Location:login.php?fehler=true");
}
?>
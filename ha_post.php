<?php
$vorname = "";
$nachname = "";
$geburtsdatum = "";
$email = "";
$passwort = "";
$fehler = false;
$daten = "daten.txt";
$info = array();


if(isset($_POST['vorname']) && $_POST['passwort']){

    if(!$_POST['vorname']){
        $fehler = true;
    }else{
        $vorname = $_POST['vorname'];
        $info[] = "Vorname: ".$vorname;
    }

    if(!$_POST['nachname']){
        $fehler = true;
    }else{
        $nachname = $_POST['nachname'];
        $info[] = "Nachname: ".$nachname;
    }

    if(!$_POST['geburtsdatum']){
        $fehler = true;
    }else{
        $geburtsdatum = $_POST['geburtsdatum'];
        $info[] = "Geburtsdatum: ".$geburtsdatum;
    }

    if(!$_POST['email']){
        $fehler = true;
    }else{
        $email = $_POST['email'];
        $info[] = "Email: ".$email;
    }

    if(!$_POST['passwort']){
        $fehler = true;
    }else{
        $passwort = $_POST['passwort'];
        $info[] = "Passwort: ".$passwort;
    }

}else{
    $fehler = true;
    header('Location: ha_register.html');
}

if(file_exists($daten)){
    $file = fopen("daten.txt", "a") or die("Unable to open file!");
    $txt = "$email;$passwort;$vorname;$nachname;$geburtsdatum \n";
    //file_put_contents($daten, $txt);
    fwrite($file, $txt);
    fclose($file);
}
    

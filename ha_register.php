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
    //$fehler = true;
    //header('Location: ha_register.php?$fehler=true');
}

if(file_exists($daten)){
    $file = fopen("daten.txt", "a") or die("Unable to open file!");
    $txt = "$email;$passwort;$vorname;$nachname;$geburtsdatum \n";
    //file_put_contents($daten, $txt);
    fwrite($file, $txt);
    fclose($file);
    header("Location:login.php");
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren - FREE MONEY</title>
</head>
<body>
    <?php if($fehler){?>
        <p>Es Fehlen noch Daten!</p>
    <?php } ?>
    <form action="ha_register.php" method="post" name="login">
        <p>
            <label for="vorname">Vorname:</label>
            <input type="text" name="vorname" id="vorname" required/>
        </p>
        <p>
            <label for="nachname">Nachname:</label>
            <input type="text" name="nachname" id="nachname" required/>
        </p>
        <p>
            <label for="geburtsdatum">Geburtsdatum:</label>
            <input type="date" name="geburtsdatum" id="geburtsdatum" required/>
        </p>
        <p>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" required/>
        </p>
        <p>
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" required/>
        </p>

        <input type="submit" name="submit" value="Registrieren" />
    </form>
    <a href="login.php">Hier anmelden!</a>
</body>
</html>
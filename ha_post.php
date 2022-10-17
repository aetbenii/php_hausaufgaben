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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optionen</title>
</head>
<body>
    
<?php
    if($fehler){
        echo "Es fehlen noch Daten!"
        ?>
        <form action="ha_post.php" method="post" name="login">
        <p>
            <label for="vorname">Vorname:</label>
            <input type="text" name="vorname" id="vorname" value="<?=$_POST['vorname']?>"/>
        </p>
        <p>
            <label for="nachname">Nachname:</label>
            <input type="text" name="nachname" id="nachname"  value="<?=$_POST['nachname']?>"/>
        </p>
        <p>
            <label for="geburtsdatum">Geburtsdatum:</label>
            <input type="date" name="geburtsdatum" id="geburtsdatum" value="<?=$_POST['geburtsdatum']?>"/>
        </p>
        <p>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" value="<?=$_POST['email']?>"/>
        </p>
        <p>
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" required/>
        </p>

            <input type="submit" name="submit" value="Registrieren" />
        </form>
    <?php } 
    else {
        
        if(file_exists($daten)){
            $file = fopen("daten.txt", "a") or die("Unable to open file!");
            $txt = "$email;$passwort;$vorname;$nachname;$geburtsdatum \n";
            //file_put_contents($daten, $txt);
            fwrite($file, $txt);
            fclose($file);
        }
        foreach($info as $value) {?>
            <p><?= $value?></p>
    <?php    }
    } ?>
</body>
</html>
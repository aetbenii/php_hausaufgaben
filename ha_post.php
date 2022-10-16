<?php
$vorname = "";
$nachname = "";
$geburtsdatum = "";
$email = "";
$passwort = "";
$fehler = false;
$intfo = array();

if(isset($_POST['vorname']) && $_POST['passwort']){

    if(!$_POST['vorname']){
        $fehler = true;
    }else{
        $info[] = "Vorname: ".$_POST['vorname'];
    }

    if(!$_POST['nachname']){
        $fehler = true;
    }else{
        $info[] = "Nachname: ".$_POST['nachname'];
    }

    if(!$_POST['geburtsdatum']){
        $fehler = true;
    }else{
        $info[] = "Geburtsdatum: ".$_POST['geburtsdatum'];
    }

    if(!$_POST['email']){
        $fehler = true;
    }else{
        $info[] = "Email: ".$_POST['email'];
    }

    if(!$_POST['passwort']){
        $fehler = true;
    }else{
        $info[] = "Passwort: ".$_POST['passwort'];
    }

}else{
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
        <input type="text" name="vorname" value="<?=$_POST['vorname']?>" />
        <input type="text" name="nachname" value="<?=$_POST['nachname']?>" >
        <input type="date" name="geburtsdatum" value="<?=$_POST['geburtsdatum']?>"/>
        <input type="email" name="email" value="<?=$_POST['email']?>"/>
        <input type="password" name="passwort" required>


        <input type="submit" name="submit" value="Registrieren" />
    </form>
<?php } 
 else {
    foreach($info as $value) {?>
        <p><?= $value?></p>
<?php    }
} ?>
</body>
</html>
<?php
session_start();

$userall = array();
$user = array();

$datei = "daten.txt";
$handle = fopen($datei, "r");
$alldata = fread($handle, filesize("daten.txt"));
$userall = explode(' ', $alldata);
$fehler = false;
$login = false;


if(isset($_POST['email']) && $_POST['passwort']){
    for ($i=0; $i < count(file($datei)); $i++) { 
        $user = explode(';', $userall[$i]);
        if(($user[0] == $_POST['email']) && ($user[1] == $_POST['passwort'])){
            //$login = true;
            
            $_SESSION['login'] = "ananas";
            header("Location:dash.php");
            die();
        }
    }
    if(!$login){
        $fehler = true;
    }
}else{
    //header("Location: login.php");
}

if($fehler){
    header("Location:login.php?fehler=true");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - FREE MONEY</title>
</head>
<body>
    <?php if(isset($_GET['fehler'])){
        $fehler = $_GET['fehler'];
        //echo $fehler;
        if($_GET['fehler'] === 'true'){?>
        <p>Email oder Passwort falsch!</p>
    <?php }
    } ?>
    <div class="formwindow"></div>
    <form action="login_logik.php" method="post">
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" required>
        </p>
        <input type="submit" value="Login">
    </form>
    <a href="ha_register.html">Hier Account erstellen!</a>
</body>
</html>

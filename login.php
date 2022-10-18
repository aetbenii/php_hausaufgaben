<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
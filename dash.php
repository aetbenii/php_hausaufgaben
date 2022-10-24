<?php 
session_start();
?>

<?php
if(isset($_SESSION['login'])){
    echo "geht";
    session_unset();
    //header("Location:login.php");
}else{
    echo "geht nicht";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eingelogt!</title>
</head>
<body>
    <h1></h1>
</body>
</html>
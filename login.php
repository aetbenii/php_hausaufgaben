<?php
$userall = array();
$user = array();

$datei = "daten.txt";
$handle = fopen($datei, "r");
$alldata = fread($handle, filesize("daten.txt"));
$userall = explode(' ', $alldata);

if(isset($_POST['email']) && $_POST['passwort']){
    $user = explode(';', $userall[0]);
    if(($user[0] === $_POST['email']) && ($user[1] === $_POST['passwort'])){
        echo "du bist eingeloggt";
    }
}else{
    echo "kevin ist ein idiot";
}
   
foreach($userall as $value){?>
    <p><?=$value ?></p>
<?php }

?>


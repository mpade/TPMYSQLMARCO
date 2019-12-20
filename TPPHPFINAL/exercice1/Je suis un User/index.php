<?php require("user.php"); ?>

<?php 

$perso = new user(); 
$perso->setnom("Je suis un User.");
$perso->afficheuser();
?>

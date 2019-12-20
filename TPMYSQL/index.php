<?php require("user.php"); ?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>


<body>

    <?php 
    
          $utilisateur1 = new user(); 
          $utilisateur1->setnom("marco");
          $utilisateur1->setmdp("0000");

    
    
    ?>

<form method="post" action="index.php">
    <p>
        <label for="nom">Votre nom :</label>
        <input type="text" name="nom" id="nom" />
    </p>
    
    <p>
        <label for="motdepasse">Votre mot de passe :</label>
        <input type="text" name="mdp" id="motdepasse" />
    </p>
        <button type="submit">Confirmer</button>
    
</form>

<?php

    function affiche_requete($Base)
    {
        try
        {
            $Donneesbrutes = $Base->query("SELECT Patient.Nom from Patient where Patient.Id_Patient");
        }
        catch(Exception $erreur)
        {
           ?> <p class="couleurp"> echo "pas de resultat" </p>; <?php
        }


        while($tabdonnees = $Donneesbrutes->fetch())
        {
            ?>
             <table class="borduretable">
                <tr> <?php echo $tabdonnees["Nom"]; ?> </tr> 
             </table> 
            <?php
        }
        $Donneesbrutes->closeCursor();

    }

    function insert_value($Base)
    {
        
        $Donneesbrutesinsert = $Base->exec("INSERT INTO Patient(Id_Patient,Nom,Prenom) VALUES (7,'Mop','Chirac')");  
        
    }
    //if isset($nom,$mdp)
    if(isset($_POST['mdp'])  &&  isset($_POST['nom'])){
        $utilisateur1->veriflog($_POST['mdp'],$_POST['nom']);

    }
    
    
    

     try
     {
        $Base =new PDO('mysql:host=192.168.65.60; dbname=Medecin; charset=utf8','root2','root2');
     }
     catch(Exception $erreur)
     {
         echo $erreur->getMessage();
     }

     affiche_requete($Base);
     insert_value($Base);

?>



</body>

</html>

    

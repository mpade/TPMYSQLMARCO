<?php require("ingrédient.php");?>

<?php require("client.php");?>

<html>
    <head>
  
    </head>

    <body>
    <div id="container">
            <!-- zone de connexion -->
            
            <form action="verifcommande.php" method="POST">
                <h1>Commande</h1>
                
                <label><b>Numéro de la pizza</b></label>
                <input type="text" placeholder="Entrer le numéro" name="id_Pizza" required>

                <label><b>Numéro du Supplément</b></label>
                <input type="password" placeholder="Entrer le numéro" name="id_supplement" required>

                <input type="submit" id='submit' value='Valider' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Mauvais numéro</p>";
                }
                ?>
            </form>
        </div>
    <?php 
       
       $client = new client();
        $client->setnom("Sene");
        $client->setmaBase(2);
        $client->afficher();

        $Ingredient = new Ingredient();
        $Ingredient->setmaBase(1);
        $Ingredient->AfficherI(1);

        $_id -> $_POST['id_Pizza'];
        echo "$_id";

    ?>

    </body>

</html>
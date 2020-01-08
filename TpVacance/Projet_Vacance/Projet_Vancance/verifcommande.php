<?php require("pizza.php");?>
<?php require("supplement.php");?>

<html>
    <head>
  
    </head>

    <body>
        
    <?php     
    
        $pizza = new pizza();
        $pizza->Verif();
    ?>
    <?php
        if (isset($_POST['id_Pizza'])){

            $isConnect = $pizza->Verif($_POST['id_Pizza'],$_POST['id_supplement']);
            if($isConnect)
            {
                echo "connecter ";

                $maBase=new PDO('mysql:host=192.168.65.226; dbname=Medecin; charset=utf8','Clems','Clems'); 

                $LesDonneesBrutesDeLaBdd = $maBase->query("select * from medecin");
                
                echo "<table>";
                while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                {
                    echo "<tr>";
                    echo "<td>".$TableauDeDonnée["nom"]."</td>";
                    echo "</tr>";
                }
                $LesDonneesBrutesDeLaBdd ->closeCursor();
               
            }
            else
            {
                echo "erreur";
            }
        }
    ?>

    </body>

</html>
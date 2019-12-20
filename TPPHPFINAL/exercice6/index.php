<?php require("user.php");?>
<?php require("perso.php");?>
<html>
 <head>
 </head>

    <body>

    <?php
        $Perso1 = new Perso(100,24,"Marco");
        $Perso2 = new Perso(100,12,"Clement");
        $Perso1->Afficher();
        $Perso2->Afficher();
        
        
        while($Perso1->isLife() && $Perso2->isLife())
        {
            $Perso1->Attaquer($Perso2);  
            if ($Perso2->isLife()){
            $Perso2->Attaquer($Perso1);     
            }
            

        }

    ?>    
    </body>

</html>




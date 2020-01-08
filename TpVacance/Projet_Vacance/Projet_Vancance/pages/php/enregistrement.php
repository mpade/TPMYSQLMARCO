<?php if(isset($_POST['email']) && $_POST['password'] == $_POST['confirmPassword']){
            echo "Vous êtes maintenant inscrit. Veuillez revenir sur la page précédent pour vous connecté.";
        }
        else{
            echo "Adresse mail ou mot de passe incorrect.";
        }  
        
        $bdd = new PDO('mysql:host=127.0.0.1; dbname=Tp_pizza; charset=utf8', 'Clems', 'Clems');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sign = $bdd->prepare("INSERT INTO pade_sene_client (nom, e_mail, mot_de_passe) VALUES(?, ?, ?)");
        $sign->execute(array($_POST['nom'], $_POST['email'] ,$_POST['password'],));
        ?>
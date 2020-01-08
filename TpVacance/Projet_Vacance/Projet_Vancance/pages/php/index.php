
<html>

<head>
    <title>Bienvenue sur PizzOut</title>
    <link  rel="stylesheet"href="styleco.css">
</head>

<body>
    <div class="container">
    <h1>Bienvenue sur PizzOut</h1>
    <form method="post" action="">
        Adresse mail : <input type="text" name="email">
        Mot de passe : <input type="text" name="password">
        <input type="submit" name="valider" value="connexion">
    </form>
    <a href="inscription.php"><br>S'inscrire'</br></a>
    
    <?php
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=Tp_pizza; charset=utf8', 'Clems', 'Clems');

    $mailconnect = $_POST['email'];
    $mdpconnect = $_POST['password'];
    $requser = $bdd->prepare("SELECT * FROM pade_sene_client WHERE e_mail = ? AND mot_de_passe = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    $userinfo = $requser->fetch();
    if ($userexist == 1) {
        $_SESSION['mail'] = $userinfo['e_mail'];
        echo "Connecté en tant que ".$userinfo['nom'];
        ?> 
        
  <?php
    }
    else{
        echo "E-mail ou mot de passe incorrect";
    }
    
    ?>
    </div>
</body>

</html>
<?php
require('classes/erreur.php');
$title='Sa_Hopital';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if(!empty($title)){echo $title;}else {echo 'Gestion Rendez-vous';} ?></title>
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
    <link rel="stylesheet" href="bootstrap/css/monstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <header>
            <nav>
                <div class="log">   
                    Sa-Hôpital
                </div>
                <i class="material-icons mob" style='color:white'>menu</i>
                <ul>
                    <li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="pages/guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="pages/faq.php"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
                <button>
                &rarr; se connecter
                </button>
                <div class="dropcontent">
                <ul>
                    <li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="faq.php"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
                <button>
                &rarr; se connecter
                </button>
                </div>
            
            </nav>
        </header>
        <main style="opacity:0.5">
        <div class="col">
        <img src="img/medecine.svg" width="400px" alt="">
        </div>
        <div class="col1">
        Plateforme de Gestion de Rendez-vous &rarr;
        </div>        
        </main>
        <div class="form">
            <h2>Authentification</h2>
            <form action="pages/traitement.php" method="post" id="form">
            <label for="medecin">Secretaire<input type="radio" name="profil"  value="secretaire" checked></label>
            <br><label for="medecin">Medecin <input type="radio" name="profil" value="medecin" ></label>
                <p>
                <input type="text" name="login" id="login"  autofocus placeholder="Entrez votre login">
                <i style="visibility:hidden" class="material-icons">visibility</i>
                </p>
                <p>
                <input type="password" name="pass" id="pass" placeholder="Entrez Votre mot de passe" minlength="4"  maxlength="10">
                <i title="afficher" class="material-icons btnvue">visibility</i>
                </p>
                <button>Conexion &rarr;</button>
                <p>
                <small class="btnclose"><i class="material-icons left">close</i>fermer</small>
                </p>
            </form>
            <small class="alert1">
            <?php
                if(isset($_GET['error'])){
                    $e=$_GET['error'];
                    if(isset($e)){
                        $r= new Erreur($e);
                       echo  $r->getMessage();
                    }
                }
            ?>  
            </small>
        </div>
        <div class="alert">
        </div>
        <footer>
            <h4>Propulsé par &copy; Diokou-Tech</h4>
            <div class="admin">
                <button><a href="pages/admin.php">Mode administrateur</a></button>
            </div>
        </footer>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/jquery-3.js"></script>
  <script src="bootstrap/js/main.js"></script>  
  <script>
      $(document).keypress(function(e){
        var touche = String.fromCharCode(e.which);
        if(touche==' '){
            formulaire();
        } 
        
    })
  </script>
</body>
</html>
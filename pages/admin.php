<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/monstyle.css">
</head>
<body>
    <nav>
<div class="log">   
                    Sa-Hôpital
                </div>
    </nav>
  <button>  <a href="../index.php">Acceuil</a></button>
    <main>
    <form action="pages/traitement.php" method="post" id="form">    
        <h2>Compte administrateur</h2>
        <p><small>Réservé uniquement aux administrateurs</small></p>
        <p>
                <input type="text" name="login" id="login" placeholder='votre login'>
        </p>
        <p>
                <input type="text" name="mopasse" id="mopasse" placeholder="votre mot de passe">
        </p>
        <p>
            <button type="submit">se connecter &rarr;</button>
        </p>
            </form>
    </main>
    <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery-3.js"></script>
  <script src="../bootstrap/js/main.js"></script>  
</body>
    <style>     
            nav{
                margin:0;
                padding:0;
                background-color:teal;
                
            }
            h2{
                color:teal;
                letter-spacing:2px;
            }
            p{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            p small{
                color:red;
            }
            form{
                box-shadow:2px 2px 2px gray;
                padding:5px;
            }
            
    </style>                
</html>
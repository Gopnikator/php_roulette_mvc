<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title> Roulette - connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />

</head>

<body>

<h1 class="titre-index">Connectez vous pour jouer à la roulette</h1>

<br>


<form class="center" action="../controller/controllerConnexion.php" method="post">
    <div class="aligner">
        <label class="sr-only" for="inlineFormInputName2"></label>
        <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="name"/>
        <label for="exampleInputPassword2"></label>
        <div class="input-group mb-2 mr-sm-2">
            <input type="password" class="form-control" name="passwrd" placeholder = "mdp"/>
        </div>
    </div>
    <br>
    <div class="center">
        <button class="btn btn-dark mb-2" type="reset">Effacer</button>
        <button class="btn btn-dark mb-2" type="submit" name = "send">Commencer</button>
    </div>
</form>



<div class="container">
    <p class="text-center">La roulette est un jeu de hasard. Elle comporte 36 cases numérotées de 1 à 36, une bille est lancée dedans et s'arrête à un moment dans une case. Le but est de prévoir où la bille va s'arrêter en misant sur le résultat.</p>
    <p class="text-center">Les règles sont ici simplifiées:</p>
    <p class="text-center">- Avant de lancer la bille, le joueur mise de l'argent. Il peut miser sur le réultat exact ou sur sa parité.</p>
    <p class="text-center">- Si le joueur mise sur un nombre et que la bille tombe dans la case numérotée à ce nom, le joueur gagne 35 fois sa mise.</p>
    <p class="text-center">- Si le joueur mise sur la parité du résultat (le résultat est pair ou impair) et qu'il voit juste, il gagne deux fois sa mise.</p>
</div>


<p class="register"><a href="../controller/controllerInscription.php"> OU INSCRIVEZ-VOUS</a></p>
</body>


</html>
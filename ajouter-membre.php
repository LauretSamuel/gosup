<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php include("header.html"); ?>

<div class="corpus">

    <div class="container-page-nom">
        <div class="page-nom">
            <h3 class="page-nom-item">Ajouter un membre</h3>
        </div>
    </div>

    <div class="container-form-add">
        <div class="form-add">
            <div class="form-signin">


                <form id="Login" action="traitement_connexion_admin.php" method="post">

                    <div class="form-group">


                        <input type="email" class="form-control" required="required" id="inputEmail" name="inputEmail" placeholder="Email">

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" required="required" id="inputPassword" name="inputPassword" placeholder="Mot de passe">

                    </div>

                    <input type="submit" value="Connexion"  class="btn form-signin-btn  w-100 ">

                </form>

            </div>

        </div>
    </div>



</div>



</body>
</html>
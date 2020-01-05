<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajouter un membre</title>
</head>
<body>
<?php include("composant-header.html"); ?>
<?php include("composant-user.php"); ?>

<div class="corpus">

    <div class="container-page-nom">
        <div class="page-nom">
            <h3 class="page-nom-item">Ajouter un membre</h3>
        </div>
    </div>

    <div class="container-form-add">
        <div class="form-add">
            <div class="form-add-input">


                <form id="Login" action="action-ajouter-membre.php" method="post">

                    <div class="form-group">


                        <input type="text" class="form-control" required="required" id="fieldnom" name="nom" placeholder="Nom">

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" required="required" id="fieldprenom" name="prenom" placeholder="Prénom">

                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" required="required" id="fieldemail" name="email" placeholder="Email">

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" required="required" id="fieldpassword" name="password" placeholder="Mot de passe">

                    </div>



                    <div class="input-group mb-3">
                        <select name="role" required="required"  class="custom-select" id="fieltypes">
                            <option value="Administrateur">Administrateur</option>
                            <option value="Professeur">Professeur</option>
                        </select>

                    </div>

                   <input type="submit" value="Valider"  class="btn form-signin-btn  w-100 ">

                </form>

            </div>

        </div>
    </div>



</div>



</body>
</html>
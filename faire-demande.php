<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Faire une demande</title>
</head>
<body>
<?php include("header.html"); ?>

<div class="corpus">

    <div class="container-page-nom">
        <div class="page-nom">
            <h3 class="page-nom-item">Faire une demande</h3>
        </div>
    </div>

    <div class="container-form-add">
        <div class="form-add">
            <div class="form-add-input">


                <form id="Login" action="traitement_connexion_admin.php" method="post">

                    <div class="form-group">


                        <input type="text" class="form-control" required="required" id="fieldnomobjet" name="inputEmail" placeholder="Nom de l'objet">

                    </div>

                    <div class="form-group">

                        <input type="number" class="form-control" required="required" id="fieldqte" name="inputPassword" placeholder="Quantité" min="1" max="10" >

                    </div>

                    <div class="form-group">

                        <div class="form-group">
                            <textarea placeholder="Precision sur la  demande: (100 lettres max)" maxlength="120" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    <input type="submit" value="Ajouter"  class="btn form-signin-btn  w-100 ">

                </form>

            </div>

        </div>
    </div>



</div>



</body>
</html>
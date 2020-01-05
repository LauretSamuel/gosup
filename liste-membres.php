<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des Membres</title>
</head>
<body>
<?php include("composant-header.html"); ?>
<?php include("composant-user.php"); ?>

<div class="corpus">

<div class="container-page-nom">
<div class="page-nom">
  <h3 class="page-nom-item">Liste des Membres</h3>
</div>
</div>


    <div class="container-liste">

    <div class="liste table-responsive">
        <table class="table table-bordered table-dark text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom/Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Rôle</th>
                <th scope="col">Membre depuis le :</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark Lamber</td>
                <td>test@gmail.com</td>
                <td>Admin</td>
                <td>07.09.2019</td>
                <td><button type="button" class="btn btn-danger ">Supprimer</button></td>

            </tr>
            </tbody>
        </table>
    </div>


    </div>

</div>




</body>
</html>
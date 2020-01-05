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
  <h3 class="page-nom-item">Stock de l'établissement</h3>
</div>
</div>


    <div class="container-liste">

    <div class="liste table-responsive">
        <table class="table table-bordered table-dark text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dénomination de l'objet</th>
                <th scope="col">Quantité</th>
                <th scope="col">Type</th>
                <th scope="col">Augmenter</th>
                <th scope="col">Diminuer</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>obj1</td>
                <td>1</td>
                <td>fourniture de burreaux</td>
                <td><button type="button" class="btn btn-light btn-xl btn-plus"></button></td>
                <td><button type="button" class="btn btn-light btn-xl btn-moins"></button></td>

            </tr>
            </tbody>
        </table>
    </div>
    </div>

</div>




</body>
</html>

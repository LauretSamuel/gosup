<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des demandes</title>
</head>
<body class="page-demandes">
<?php include("header.html"); ?>
<div class="corpus">

<div class="container-page-nom">
<div class="page-nom">
  <h3 class="page-nom-item">Liste des demandes</h3>
</div>
</div>


    <div class="container-liste">

    <div class="liste table-responsive">
        <table class="table table-bordered table-dark text-center">
            <thead>
            <tr>
                <th scope="col">Statut/Date</th>
                <th scope="col">Nom</th>
                <th scope="col">Objet</th>
                <th scope="col">Quantité</th>
                <th scope="col">Salle</th>
                <th scope="col">Message</th>
                <th scope="col">Valider</th>
                <th scope="col">Annuler</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Terminée <br> 07-08-2019</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td> character max 100  character max 100 character max 100 character max 100 character max 100 characte</td>
                <td><button type="button" class="btn btn-success btn-circle-validate btn-xl"></button></td>
                <td><button type="button" class="btn btn-danger btn-circle-cancel btn-xl"></button></td>
            </tr>
            </tbody>
        </table>
    </div>


    </div>

</div>




</body>
</html>
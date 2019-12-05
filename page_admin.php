<?php 
    session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=simple_au_double2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


    if (empty($_SESSION['id'])) {
/*/*/////////////////////////////////////////////////////////ACCES REFUSE/////////////////////////////////////////////////////////////////////////////////////*/
        ?>                                                                                                                                                              
       
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css/style.css">
            <title>Accés refusé</title>
        </head>
        <body>
        <div class="flex_center_column">
            <h1 style="margin : 100px 0px 20px 0px; text-align:center;">Accès refusé. <br> Veuillez vous identifiez pour avoir accès à cette page</h1>
            <a href="connexion_admin.php" ><button class="btn_connexion">Se connecter</button></a>
            </div>
        </body>
        </html>
        <?php
/*/*//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    }
    else {
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css/style_admin.css">
            <title>Page admin</title>
        </head>
        <body>
        <div class="header">
            <div class="adminname">
                <h1><?php echo ''.$_SESSION['nom'].' '.$_SESSION['prenom'].'' ?></h1>
            </div>
            <h1 class="titre_header">Page Admin</h1>
            <div>
            <a href="Ajout_membres.php" ><button class="btndeco">Ajouter membres</button></a>
            <a href="deconnexion.php" ><button class="btndeco">Deconnexion</button></a>
            </div>
        </div>
        <div class="div_table">
            <h2 class="titre_tableau">Membres</h2>
            <table border>
                <tr>
                    <th class="titre_t">Nom</th>
                    <th class="titre_t">Types</th>
                    <th class="titre_t"></th>
                </tr>
                <?php  
                $reponse = $bdd->query('SELECT * FROM utilisateur WHERE type IN ("consultant", "non_consultant") ');
                while ($donnees = $reponse->fetch())
                { 
                ?>
                <tr>
                    <td><?php echo $donnees['nom']?> <?php echo $donnees['prenom'] ?></td>
                    <td><?php echo $donnees['type'];?></td>
                    <td><a href="modifier.php?id=<?php echo $donnees['id']?>&type=<?php echo $donnees['type'] ?>"><button class="btndeco2">Modifier</button></a><br><a href="afficher.php?id=<?php echo $donnees['id']?>&type=<?php echo $donnees['type'] ?>"><button class="btndeco2">Afficher</button></a></td>
                    
                </tr>
                <?php
                 }
                 ?>

            </table>
        </div>

        </body>
        </html>
        <?php
    }

?>
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

$_type = $_GET['type'];
$_id = $_GET['id'];


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
                <meta name="viewport" content="width=*, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="css/style_admin.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                
                <title>Afficher</title>
            </head>
            <body>
            <div class="header">
                        <div class="adminname">
                            <h1><?php echo ''.$_SESSION['nom'].' '.$_SESSION['prenom'].'' ?></h1>
                        </div>
                        <h1 class="titre_header">Afficher</h1>
                        <div>
                        <a href="javascript:history.go(-1)" ><button class="btndeco">Retour</button></a>
                        <a href="deconnexion.php" ><button class="btndeco">Deconnexion</button></a>
                        </div>
                    </div>

<?php 
        }
        $reponse = $bdd->query('SELECT*FROM utilisateur WHERE id = "'.$_id.'"');
        $donnees = $reponse->fetch();
        ?>

<div class="div_table">
    <h1 class="titre_tableau"><?php echo $donnees['nom']?> <?php echo $donnees['prenom']?></h1>
    <table border>
        <tr>
            <th class="titre_t">Budget Mensuel</th>
            <th class="titre_t">Ventes additionelles</th>
            <th class="titre_t">Prime individuelle</th>
            <th class="titre_t">Prime collective</th>
            <th class="titre_t">Total prime</th>
        </tr>
        <?php
    $total = 0;
    $reponse = $bdd->query('SELECT * FROM prime');
    while ($donnees = $reponse->fetch())
    {
        
        $total = $total + $donnees['ventes_additionelles6mois'];
       
    } 
    echo $total;
    $reponse->closeCursor();

        $reponse = $bdd->query('SELECT * FROM prime WHERE id_utilisateur = "'.$_id.'" ');
        $donnees = $reponse->fetch();
    ?>
    <tr>
    <td><?php echo $donnees['budget_mensuel']?> €</td>
    <td><?php echo $donnees['ventes_additionelles']?> €</td>
    <td><?php echo $donnees['prime_personelle']?> €</td>
    <td><?php 
        $prime_collective = $total*($donnees['part_collective']/100);
        echo $prime_collective;
    ?> €</td>
    <td><?php echo $prime_collective + $donnees['prime_personelle']?> €</td>
    
    
    </tr>
    </table>
    </div>
    
    



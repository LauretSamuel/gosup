
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
    
    <title>Modifier</title>
</head>
<body>
<div class="header">
            <div class="adminname">
                <h1><?php echo ''.$_SESSION['nom'].' '.$_SESSION['prenom'].'' ?></h1>
            </div>
            <h1 class="titre_header">Modifier</h1>
            <div>
            <a href="javascript:history.go(-1)" ><button class="btndeco">Retour</button></a>
            <a href="deconnexion.php" ><button class="btndeco">Deconnexion</button></a>
            </div>
        </div>

<?php
switch ($_type) {
    case 'admin':
    $reponse = $bdd->query ('SELECT * FROM utilisateur WHERE id = '.$_id.'');
    $donnees = $reponse->fetch();
    ?>
    <div class="tout">
        <form action="traitement_modifier.php?nom=<?php echo $donnees['nom']?>&prenom=<?php echo $donnees['prenom'] ?>" style="color:black" class="formulaire" method="GET">
<div class="tout">
            <div class="partie_form"> 
                <div>
                    <label for="nom!">Nom :</label>
                    <input type="text" value="<?php echo $donnees['nom'] ?>" name="nom">
                </div>
                <div>
                    <label for="prenom">Prenom :</label>
                    <input type="text" value="<?php echo $donnees['prenom'] ?>" name="prenom">
                </div>
                <div>
                <input type="hidden" name="type" value="<?php echo $donnees['type']?>">
                </div>
                <div>
                <input type="hidden" name="id_utilisateur" value="<?php echo $donnees['id']?>">
                </div>
                <div>
                <input type="hidden" name="part_collective" value="<?php echo $donnees['part_collective']?>">
                </div>
                
            </div>
            <div class="partie_form">
                <div>
                    <label for="budget_mensuel">Budget Mensuel :</label>
                    <input type="number" id="budget_mensuel" name="budget_mensuel" required>€
                </div>
                <div>
                    <label for="budget_semestriel">Budget Semestriel :</label>
                    <input type="number" id="budget_semestriel" name="budget_semestriel" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles">Ventes additionelles :</label>
                    <input type="number" id="ventes_additionelles" name="ventes_additionelles" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles6mois">Ventes additionelles (en 6 mois) :</label>
                    <input type="number" id="ventes_additionelles6mois" name="ventes_additionelles6mois" required> €
                </div>
            </div>
            <div class="partie_form">
                <div>
                <label for="augmentation">Augmentation :</label>
                <input type="number" id="augmentation" name="augmentation" readonly>
                </div>
                <div>
                <label for="part_consultant">Part consultant :</label>
                <input type="number" id="part_consultant" name="part_consultant" readonly>
                </div>
                <div>
                <label for="prime_personelle">Prime personelle :</label>
                <input type="number" id="prime_personelle" name="prime_personelle" readonly> €
                </div>
                
            </div>
</div>
            <div class="bouton">
            <input type="submit" class="btndeco2">
</div>
        </form>
        </div>
        <?php
        
        
        break;
    case 'consultant':
    
    $reponse = $bdd->query('SELECT * FROM utilisateur WHERE id = '.$_id.' ');
    $donnees = $reponse->fetch();
    ?>
    <div class="tout">
        <form action="traitement_modifier.php?nom=<?php echo $donnees['nom']?>&prenom=<?php echo $donnees['prenom'] ?>" style="color:black" class="formulaire" method="GET">
        <div class="tout_row">
            <div class="partie_form"> 
                <div>
                    <label for="nom!">Nom :</label>
                    <input type="text" value="<?php echo $donnees['nom'] ?>" name="nom">
                </div>
                <div>
                    <label for="prenom">Prenom :</label>
                    <input type="text" value="<?php echo $donnees['prenom'] ?>" name="prenom">
                </div>
                <div>
                <input type="hidden" name="type" value="<?php echo $donnees['type']?>">
                </div>
                <div>
                <input type="hidden" name="id_utilisateur" value="<?php echo $donnees['id']?>">
                </div>
                <div>
                <input type="hidden" name="part_collective" value="<?php echo $donnees['part_collective']?>">
                </div>
            </div>
            <div class="partie_form">
                <div>
                    <label for="budget_mensuel">Budget Mensuel:</label>
                    <input type="number" id="budget_mensuel" name="budget_mensuel" required>€
                </div>
                <div>
                    <label for="budget_semestriel">Budget Semestriel :</label>
                    <input type="number" id="budget_semestriel" name="budget_semestriel" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles">Ventes additionelles:</label>
                    <input type="number" id="ventes_additionelles" name="ventes_additionelles" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles6mois">Ventes additionelles (en 6 mois) :</label>
                    <input type="number" id="ventes_additionelles6mois" name="ventes_additionelles6mois" required> €
                </div>
            </div>
            <div class="partie_form">
                <div>
                <label for="augmentation">Augmentation :</label>
                <input type="number" id="augmentation" name="augmentation" readonly>
                </div>
                <div>
                <label for="part_consultant">Part consultant :</label>
                <input type="number" id="part_consultant" name="part_consultant" readonly>
                </div>
                <div>
                <label for="prime_personelle">Prime personelle :</label>
                <input type="number" id="prime_personelle" name="prime_personelle" readonly> €
                </div>
            </div>
</div>
<div class="bouton">
            <input type="submit" class="btndeco2">
</div>
        </form>
        </div>
        <?php
        
        
        break;
    case 'non_consultant':
    
    $reponse = $bdd->query('SELECT * FROM utilisateur WHERE id = '.$_id.' ');
    $donnees = $reponse->fetch();
    ?>
    <div class="tout">
        <form action="traitement_modifier.php?nom=<?php echo $donnees['nom']?>&prenom=<?php echo $donnees['prenom'] ?>" style="color:black" class="formulaire" method="GET">
        <div class="tout">
            <div class="partie_form"> 
                <div>
                    <label for="nom!">Nom :</label>
                    <input type="text" value="<?php echo $donnees['nom'] ?>" name="nom">
                </div>
                <div>
                    <label for="prenom">Prenom :</label>
                    <input type="text" value="<?php echo $donnees['prenom'] ?>" name="prenom">
                </div>
                <div>
                <input type="hidden" name="type" value="<?php echo $donnees['type']?>">
                </div>
                <div>
                <input type="hidden" name="id_utilisateur" value="<?php echo $donnees['id']?>">
                </div>
                <div>
                <input type="hidden" name="part_collective" value="<?php echo $donnees['part_collective']?>">
                </div>
                
            </div>
            <div class="partie_form">
                <div>
                    <label for="budget_mensuel">Budget Mensuel :</label>
                    <input type="number" id="budget_mensuel" name="budget_mensuel" required> €
                </div>
                <div>
                    <label for="budget_semestriel">Budget Semestriel :</label>
                    <input type="number" id="budget_semestriel" name="budget_semestriel" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles">Ventes additionelles :</label>
                    <input type="number" id="ventes_additionelles" name="ventes_additionelles" readonly> €
                </div>
                <div>
                    <label for="ventes_additionelles6mois">Ventes additionelles (en 6 mois) :</label>
                    <input type="number" id="ventes_additionelles6mois" name="ventes_additionelles6mois" required> €
                </div>
            </div>
            <div class="partie_form">
                <div>
                <label for="augmentation">Augmentation :</label>
                <input type="number" id="augmentation" name="augmentation" readonly>
                </div>
                <div>
                <label for="part_consultant">Part consultant :</label>
                <input type="number" id="part_consultant" name="part_consultant" readonly>
                </div>
                <div>
                <label for="prime_personelle">Prime personelle :</label>
                <input type="number" id="prime_personelle" name="prime_personelle" readonly> €
                </div>
                
            </div>
</div>
            <div class="bouton">
            <input type="submit" class="btndeco2">
</div>
        </form>
        </div>
        <?php
        
        
        break;
    default:
        break;
}


?>   
</body>
<script src="javascript/javascript.js"></script>

</html>



<?php }
?>
<?php


try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=simple_au_double2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


?>




<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page Consultant</title>
    <link rel="stylesheet" href="css/styleconsultant.css">
  </head>
  <body>
    <div class="header">
      <div>
  <div class="logo"></div>
      </div>
      <a href="deconnexion_consultant.php"><input class="btndeco" type="submit" name="deco" value="Deconexion"></a>
      </div>

<div class="stbox">
<?php 
  $reponse = $bdd->query('SELECT*FROM utilisateur WHERE id = '.$_SESSION['id'].' ')
?>
<h1 class="nom"><?php echo $_SESSION['nom']?> <?php echo $_SESSION['prenom'] ?></h1>
<h3 class="poste">Consultant</h3>

</div>

<div class="ndbox">


  <h2 class="periode">
<?php


// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM periode');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
  <p>Periode du <?php echo $donnees['du']; ?> au <?php echo $donnees['au']; ?></p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
$total = 0;
$reponse = $bdd->query('SELECT * FROM prime');
    while ($donnees = $reponse->fetch())
    {
        
        $total = $total + $donnees['ventes_additionelles6mois'];
       
    } 
  $reponse -> closeCursor();
$reponse = $bdd->query('SELECT* FROM prime WHERE id_utilisateur ='.$_SESSION['id'].'');
$donnees = $reponse->fetch();
?>


  </h2><hr class="test">

</div>

<div class="rdbox">

<div class="inrdbox">
<h3 class="textinrdbox">BUDGET MENSUEL :</h3>
<div class="val€">
  <h1><?php echo $donnees['budget_mensuel'] ?> €</h1>
</div>
</div>

<div class="inrdbox">
<h3 class="textinrdbox">VENTES ADDITIONELLES :</h3>
<div class="val€">
  <h1><?php echo $donnees['ventes_additionelles6mois']?> €</h1>
</div>
</div>

<div class="inrdbox">
<h3 class="textinrdbox">PRIME INDIVIDUELLE :</h3>
<div class="val€">
  <h1><?php echo $donnees['prime_personelle'] ?> €</h1>
</div>
</div>

<div class="inrdbox">
<h3 class="textinrdbox">PRIME COLLECTIVE :</h3>
<div class="val€">
  <h1><?php 
        $prime_collective = $total*($donnees['part_collective']/100);
        echo $prime_collective;
    ?> €</h1>
</div>
</div>

<div class="inrdbox">
<div>
  <h3 class="textinrdbox">TOTAL PRIME :</h3>
</div>
<div class="val€">
  <h1><?php echo $prime_collective + $donnees['prime_personelle']?> €</h1>
</div>
</div>

</div>


  </body>
</html>
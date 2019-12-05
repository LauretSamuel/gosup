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


$_id = $_GET['id_utilisateur'];
$_nom = $_GET['nom'];
$_prenom = $_GET['prenom'];
$_budget_mensuel = $_GET['budget_mensuel'];
$_budget_semestriel = $_GET['budget_semestriel'];
$_ventes_additionelles = $_GET['ventes_additionelles'];
$_ventes_additionelles6mois = $_GET['ventes_additionelles6mois'];
$_augmentation = $_GET['augmentation'];
$_part_consultant = $_GET['part_consultant'];
$_prime_personelle = $_GET['prime_personelle'];


$reponse = $bdd->exec('UPDATE prime SET budget_mensuel= "'.$_budget_mensuel.'", budget_semestriel= "'.$_budget_semestriel.'", ventes_additionelles= "'.$_ventes_additionelles.'", ventes_additionelles6mois= "'.$_ventes_additionelles6mois.'", augmentation= "'.$_augmentation.'", part_consultant= "'.$_part_consultant.'", prime_personelle= "'.$_prime_personelle.'", part_collective= "'.$_GET['part_collective'].'" WHERE id_utilisateur = "'.$_id.'" ');

$message = "Modification enregistrer";
echo "<script type='text/javascript'>alert('$message'); document.location.href = 'page_admin.php'</script>";

?>
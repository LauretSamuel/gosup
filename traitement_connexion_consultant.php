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

$reponse = $bdd->query('SELECT * FROM utilisateur WHERE email = "'.$_POST['email'].'" AND type IN ("consultant","non_consultant")');
$resultat = $reponse->fetch();

if(!$resultat)
{
    header('Location: error_identification_consultant.php');
}

else
{
    if ( $_POST['mdp'] == $resultat['mdp'])
    {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['prenom'] = $resultat['prenom'];
        $_SESSION['nom'] = $resultat['nom'];

        if ($resultat['type'] == 'consultant') {
           $message = "Vous etes connecter en tant que consultant";
            echo "<script type='text/javascript'>alert('$message'); document.location.href = 'consultant.php'</script>";
        }
        else if ($resultat['type'] == 'non_consultant') {
            $message = "Vous etes connecter en tant que non consultant";
            echo "<script type='text/javascript'>alert('$message'); document.location.href = 'non_consultant.php'</script>";
        }
        
    }
    else 
    {
        header('Location: error_identification_consultant.php');
    }
}


?>
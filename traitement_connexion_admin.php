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

$reponse = $bdd->query('SELECT * FROM utilisateur WHERE email = "'.$_POST['email'].'" AND type = "admin"');
$resultat = $reponse->fetch();

if(!$resultat)
{
    header('Location: error_identification.php');
}

else
{
    if ( $_POST['mdp'] == $resultat['mdp'])
    {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['prenom'] = $resultat['prenom'];
        $_SESSION['nom'] = $resultat['nom'];
        $message = "Vous etes connecter";
        echo "<script type='text/javascript'>alert('$message'); document.location.href = 'page_admin.php'</script>";
    }
    else 
    {
        header('Location: error_identification.php');
    }
}


?>
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


//Déclaration des variables necessaires
$dbname = 'simple_au_double2';
$servername = 'localhost';
$nom = $_GET['firstname'];
$prenom = $_GET['lastname'];
$password = $_GET['password'];
$verifpassword = $_GET['verifpassword'];
$email=$_GET['email'];
$type= $_GET['type'];
$champ1 = $_GET['password'];
$champ2 = $_GET['verifpassword'];


if ($champ1==$champ2){

switch ($type) {
  case 'Admin':
  $reponse = $bdd->query("INSERT INTO  utilisateur (id , nom , prenom , email, mdp, type,part_consultant) VALUES (null,'$nom','$prenom','$email','$password','admin',1)");
  $reponse->closeCursor();
  
  $reponse = $bdd->query("SELECT* FROM utilisateur ORDER BY id DESC LIMIT 1 ") ;
  $donnees = $reponse->fetch();
  $id_utlisateur = $donnees['id'];
  $reponse->closeCursor();

  $reponse = $bdd->query("INSERT INTO  prime (id, id_utilisateur, types, nom, prenom, budget_mensuel, budget_semestriel, ventes_additionelles, ventes_additionelles6mois, augmentation, part_consultant, prime_personelle, part_collective) 
  VALUES (NULL,'$id_utlisateur','admin','$nom','$prenom',0,0,0,0,0,0,0,0)");
  $reponse->closeCursor();

  $message = "L\'utilisateur $nom $prenom a été ajouter en tant que Admininstrateur ";
  echo "<script type='text/javascript'>alert('$message'); document.location.href = 'page_admin.php'</script>";
  break;

    case 'Consultant':
    $reponse = $bdd->query("INSERT INTO  utilisateur (id , nom , prenom , email, mdp, type,part_collective) VALUES (null,'$nom','$prenom','$email','$password','consultant',1)");
    $reponse-> closeCursor();
  
  $reponse = $bdd->query("SELECT* FROM utilisateur ORDER BY id DESC LIMIT 1 ") ;
  $donnees = $reponse->fetch();
  $id_utlisateur = $donnees['id'];
  $reponse->closeCursor();
  
  $reponse = $bdd->query("INSERT INTO  prime (id, id_utilisateur, types, nom, prenom, budget_mensuel, budget_semestriel, ventes_additionelles, ventes_additionelles6mois, augmentation, part_consultant, prime_personelle, part_collective) 
  VALUES (null,'$id_utlisateur','consultant','$nom','$prenom',0,0,0,0,0,0,0,0)");
  
    $message = "L\'utilisateur $nom $prenom a été ajouter en tant que consultant";
    echo "<script type='text/javascript'>alert('$message'); document.location.href = 'page_admin.php'</script>";

      break;

      case 'Non consultant':
      $reponse = $bdd->query("INSERT INTO  utilisateur (id , nom , prenom , email, mdp, type,part_collective) VALUES (null,'$nom','$prenom','$email','$password','non_consultant',2.5)");
      $reponse->closeCursor();
      
      $reponse = $bdd->query("SELECT* FROM utilisateur ORDER BY id DESC LIMIT 1 ") ;
      $donnees = $reponse->fetch();
      $id_utlisateur = $donnees['id'];
      $reponse->closeCursor();
    
      $reponse = $bdd->query("INSERT INTO  prime (id, id_utilisateur, types, nom, prenom, budget_mensuel, budget_semestriel, ventes_additionelles, ventes_additionelles6mois, augmentation, part_consultant, prime_personelle, part_collective) 
      VALUES (NULL,'$id_utlisateur','non_consultant','$nom','$prenom',0,0,0,0,0,0,0,0)");
      $reponse->closeCursor();
      $message = "L\'utilisateur $nom $prenom a été ajouter en tant que Non consultant";
      echo "<script type='text/javascript'>alert('$message'); document.location.href = 'page_admin.php'</script>";

      break;

    }

}else{

  echo "<script type='text/javascript'>document.location.href = 'error_identification.php'</script>";


}





?>

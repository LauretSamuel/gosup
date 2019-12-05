<?php 
session_start();
session_destroy();

$message = "Vous etes deconnecter";
echo "<script type='text/javascript'>alert('$message'); document.location.href = 'connexion_admin.php'</script>";

?>
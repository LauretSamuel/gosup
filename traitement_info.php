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
else{

    
}
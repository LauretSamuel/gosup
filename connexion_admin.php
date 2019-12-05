<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion Admin</title>
</head>
<body>
    
    <div class="flex_center_column">
        <img src="image/logo.png" alt="logo du simple au double" width="270px">
        <h1 class="titre">Connexion Admin</h1>
        <form action="traitement_connexion_admin.php" method="POST" class="flex_center_column">
            <div class="flex_center_row">
                <div class="flex_center_column div_label">
                    <label for="email" class="label_champ_admin">E-mail :</label>
                    <label for="mdp" class="label_champ_admin">Mot de passe :</label>
                </div>
                <div class="flex_center_column">
                    <input type="text" required="required" name="email" class="champ_admin">
                    <input type="password" required="required" name="mdp" class="champ_admin">
                </div>
            </div>
            <div>
                <input type="submit" value="Connexion" class="btn_connexion">
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion</title>
</head>
<body class="page-connexion" >



       <div class="form-signin">

            <div class="form-signin-img"></div>

           <form id="Login" action="traitement_connexion_admin.php" method="post">

               <div class="form-group">


                   <input type="email" class="form-control" required="required" id="inputEmail" name="inputEmail" placeholder="Email">

               </div>

               <div class="form-group">

                   <input type="password" class="form-control" required="required" id="inputPassword" name="inputPassword" placeholder="Mot de passe">

               </div>

               <input type="submit" value="Connexion"  class="btn form-signin-btn  w-100 ">

           </form>

       </div>



</body>
</html>


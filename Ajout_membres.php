<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
function confirme()
{
var champ1 = document.getElementById('password').value;
var champ2 = document.getElementById('verifpassword').value;
$.ajax({
type: "POST",
url: "formaction.php",
data: {champ1: champ1, champ2: champ2},
success: function(msg){
$('#rep').empty();
$('#rep').append(msg);
}
});
}
</script>

			<link rel="stylesheet" href="css/Ajout_membres.css">
				<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
					<title>Ajout de Membres</title>
				</head>
				<body>
					<div class="header">
						<div class="adminname">
							<h1><?php echo $_SESSION['nom']?> <?php echo $_SESSION['prenom']?></h1>
						</div>
						<h1 class="addmember">Page d'ajout de membres</h1>
						<input class="btndeco" type="submit" name="deco" value="Deconexion">
						</div>
						<div class="mid">
							<div class="centralbox">
								<form class="pure-form pure-form-aligned" action="formaction.php" method="GET" >
									<fieldset>
										<div class="pure-control-group">
											<label for="firstname">Nom*  :</label>
											<input name="firstname" type="text" required="required" placeholder="Votre Nom">
											</div>
											<div class="pure-control-group">
												<label for="lastname">Prénom*  :</label>
												<input name="lastname" type="text" required="required" placeholder="Votre Prénom">
												</div>



												<div class="pure-control-group">
													<label for="password">Mot de passe*  :</label>
													<input name="password" id="password" type="password" required="required" placeholder="Password">
													<p id="egal"></p>
													</div>
													<div class="pure-control-group">
														<label for="verifpassword">Verif de mot de passe* :</label>
														<input name="verifpassword" id="verifpassword" type="password" required="required" placeholder="Verification Password">
														</div>
														<div class="pure-control-group">
															<label for="email">Email*  :</label>
															<input name="email" type="email" required="required" placeholder="Votre addrese Email">
															</div>
															<div class="pure-control-group">
																<label class="" for="type">Type de membres*  :</label>
																<select name="type" class="pure-control-group">
																	<option>Consultant</option>
																	<option>Non consultant</option>
																	<option>Admin</option>
																</select>
															</div>
															<div class="pure-controls">
																<input type="submit" name="btnvalider" class="pure-button pure-button-primary">
																	<a href="page_admin.php">
																		<input type="button" value="Annuler" class="pure-button pure-button-primary">
																		</a>
																	</div>
																	<h6>*Les champs son obligatoires</h6>

																</fieldset>
															</form>
														</div>
													</div>
													<div class="footer">
													</div>
												</body>

												<script type="text/javascript">
												var $apass = $("#password")
												var $bpass = $("#verifpassword")
												</script>

											</html>

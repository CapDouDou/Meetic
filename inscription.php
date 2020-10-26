<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscription.css">
	<title>meetic tu clic tu nique !!!</title>
</head>
<body>
	<div class="top">

		<p>
			<a href="index.php">accueille</a>
		</p>
		<p>
			<a href="conec.php">Se connecter</a>
		</p>
	</div>
	<div>
		<img class="logo" src="image/image2.jpg">	
	</div>
	<div class="enre">
		<form method="post" action="">
		Entrer votre mail :<br>
		<input type="email" id="mail" name="mail"><br>

		Prénom :<br>
		<input type="text" id="Prénom" name="prenom"><br>

		Nom :<br>
		<input type="text" id="nom" name="nom"><br>

		Ville :<br>
		<input type="text" id="ville" name="ville"><br>

		<input type="radio" name="gender" value="female"> Femme
		<input type="radio" name="gender" value="male"> Homme
		<input type="radio" name="gender" value="autre"> Autre<br>

		<input id="date" type="date" name="date_of_born"
			value="2000-01-06"
			min="1935-01-01"
			max="2001-01-01"><br>

		Mots de passe :<br>
		<input type="text" id="mdp" name="mots_de_passe"><br>

		Vérification mots de passe :<br>
		<input type="text" id="verif_mdp" name="mots_de_passe_verif"><br>

		<button id="btn1" type="submit">valider</button>
	</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		jQuery(function(){
			$("#btn1").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
				if (verif_mdp === mdp) {
					$.post('inscriptionphp.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;
				}
				else if (verif_mdp != mdp){
					alert("Les mots de passe ne sont pas idantique !!!");
				}

			});
		});
	</script>
	<div class="bot"></div>
</body>
</html>
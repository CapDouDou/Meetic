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
			<a href="index.php">deco</a>
		</p>
		<p>
			<a href="profil.php">retour</a>
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

		<button id="btn1" type="submit">Valider</button><br>

		Nom :<br>
		<input type="text" id="nom" name="nom"><br>

		<button id="btn2" type="submit">Valider</button><br>

		Ville :<br>
		<input type="text" id="ville" name="ville"><br>

		<button id="btn3" type="submit">Valider</button><br>

		<input type="radio" name="gender" value="female"> Femme
		<input type="radio" name="gender" value="male"> Homme
		<input type="radio" name="gender" value="autre"> Autre<br>

		<button id="btn4" type="submit">Valider</button><br>

		<input id="date" type="date" name="date_of_born"
			value="2000-01-06"
			min="1935-01-01"
			max="2001-01-01"><br>
		<button id="btn5" type="submit">Valider</button><br>

		Mots de passe :<br>
		<input type="text" id="mdp" name="mots_de_passe"><br>

		<button id="btn6" type="submit">valider</button>
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
					$.post('modifprenom.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});

			$("#btn2").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
					$.post('modifnom.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});

			$("#btn3").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
					$.post('modifville.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});

			$("#btn4").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
					$.post('modifgenre.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});

			$("#btn5").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
					$.post('modifdate.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});

			$("#btn6").click(function(e){
				var mail = $("#mail").val();
				var Prénom = $("#Prénom").val();
				var nom = $("#nom").val();
				var ville = $("#ville").val();
				var sexe = ($('input[name=gender]:checked').val());
				var mdp = $("#mdp").val();
				var verif_mdp = $("#verif_mdp").val();
				var date = $("#date").val();
					$.post('modifmdp.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.bot').text(donnees);
					});
					return false;

			});
		});
	</script>
	<div class="bot"></div>
</body>
</html>
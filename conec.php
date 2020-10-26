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
			<a href="inscription.php">inscription</a>
		</p>
	</div>
	<div>
		<img class="logo" src="image/image2.jpg">	
	</div>
	<div class="enre">
		<form method="post" action="">
		Entrer votre mail :<br>
		<input type="email" id="mail" name="mail"><br>

		Mots de passe :<br>
		<input type="text" id="mdp" name="mots_de_passe"><br>

		<p class="top2">
			<a href="profil.php">Valider</a>
		</p>
		
	</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		jQuery(function(){
			$("#btn1").click(function(e){
				alert('lol');
				var mail = $("#mail").val();
				var mdp = $("#mdp").val();

			});
		});
	</script>
</body>
</html>
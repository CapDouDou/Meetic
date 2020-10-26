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
			<a href="index.php">Deco</a>
		</p>
		<p>
			<a href="option.php">option</a>
		</p>
	</div>
	<div>
		<img class="logo" src="image/image2.jpg">	
	</div>
	<div class="enre">
		<h2></h2>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		jQuery(function(){
			$("#btn1").click(function(e){
				var mail = $("#mail").val();
				var mdp = $("#mdp").val();
					$.post('inscriptionphp.php',{mail:mail,Prénom:Prénom,nom:nom,ville:ville,sexe:sexe,mdp:mdp,date:date},function(donnees){
						alert("lol");
						$('.top').text(donnees);
					});
					return false;

			});
		});
	</script>
</body>
</html>
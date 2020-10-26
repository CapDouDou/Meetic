<?php
class Mysql
{
	private  $serveursql = "localhost";
	private  $utilisateursql = "root";
	private  $passwordlsql = "root";
	private  $bassesql = "Meetic_log";

	protected $mdpcouper;
	protected  $bdd;

	public function init()
	{
		try
		{
			$this->bdd = new PDO('mysql:host='.$this->serveursql.';dbname='.$this->bassesql, $this->utilisateursql, $this->passwordlsql);
		}
		catch (Exception $e)
		{
			die('Error : ' . $e->getMessage());
		}

		$this->mdpcouper = password_hash($_POST["mdp"], PASSWORD_BCRYPT);

		 $req = $this->bdd->prepare("INSERT INTO Membre (Prenom, Nom, Sexe, Ville, DateDeNaissance, Mail, MotsDePasse) VALUES (:Prenom, :Nom, :sexe, :Ville, :date, :mail, :mdp)");
		$req->bindValue( ':Prenom' , htmlspecialchars($_POST["Prénom"]), PDO::PARAM_STR);
		$req->bindValue(':Nom' , htmlspecialchars($_POST["nom"]));
		$req->bindValue(':sexe' , htmlspecialchars($_POST["sexe"]));
		$req->bindValue(':Ville' , htmlspecialchars($_POST["ville"]));
		$req->bindParam(':date' , $_POST["date"]);
		$req->bindValue(':mail' , $_POST["mail"]);
		$req->bindValue(':mdp' , password_hash($_POST["mdp"], PASSWORD_BCRYPT));
		$req->execute();
	}
}
$membre = new Mysql();
$membre->init();
?>
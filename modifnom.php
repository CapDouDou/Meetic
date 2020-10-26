<?php
class modifville
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

		 $req = $this->bdd->prepare("UPDATE Membre SET  (Nom) VALUES (:nom)");
		$req->bindValue( ':nom' , htmlspecialchars($_POST["nom"]), PDO::PARAM_STR);

		$req->execute();
	}
}
$membre = new modifville();
$membre->init();
?>
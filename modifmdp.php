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

		 $req = $this->bdd->prepare("UPDATE  Membre SET (MotsDePasse) VALUES (:mdp)");
		$req->bindValue(':mdp' , password_hash($_POST["mdp"], PASSWORD_BCRYPT));
		$req->execute();
	}
}
$membre = new Mysql();
$membre->init();
?>
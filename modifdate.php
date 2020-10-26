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

		 $req = $this->bdd->prepare("UPDATE Membre SET  (Date) VALUES (:date)");

		$req->bindValue(':date' , htmlspecialchars($_POST["date"]));
		$req->execute();
	}
}
$membre = new modifville();
$membre->init();
?>
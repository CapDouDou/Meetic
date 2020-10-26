<?php
class connect
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

		$mailconect = htmlspecialchars($_POST['mail']);
		$mdpconnect = htmlspecialchars($_POST['mdp']);

		$requser = $bdd->prepare("SELECT * FROM Membre WHERE Mail = ? AND MotsDePasse = ?");
		$requser->execute(array($mailconect, $mdpconnect));
	}

}
$membre = new connect();
$membre->init();
?>
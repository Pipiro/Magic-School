<?php

require_once 'AbstractPdoManager.class.php';

class PdoNotificationManager extends AbstractPdoManager 
{

	//------------------------------------------------------------
	//  Fonction 	getNotificationByAccount
	//  Auteur      Pipiro
	//------------------------------------------------------------
	//  Role		: Récupérer les notification par compte
	//
	//------------------------------------------------------------
	//  Entrée		: Pseudo du joueur, mot de passe
	//  Sortie		: Objet Joueur
	//------------------------------------------------------------
	public function getNotificationByAccount($idAccount)
	{
		$query = $this->pdo->prepare("SELECT id, username, password, isAdmin, isOnline, lastOnline FROM player WHERE idAccount=:idAccount");

		$query->bindValue(':idAccount', $idAccount);
		$query->execute();
			
		$result = $query->fetch(PDO::FETCH_OBJ);

		if($result && $result->password == (md5($password)))
		{
			return new Player($result->id, $result->username, $result->isAdmin, $result->isOnline, $result->lastOnline);
		}
	}


}
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
	//  Entrée		: Id du compte
	//  Sortie		: Objets notification
	//------------------------------------------------------------
	public function getNotificationsByAccount($idAccount)
	{
		$results = array();
		$query = $this->pdo->prepare("SELECT id, idAccount, type, content, isNew, date FROM notification WHERE idAccount=:idAccount ORDER BY date DESC");

		$query->bindValue(':idAccount', $idAccount);
		$query->execute();
		
		while($result = $query->fetch(PDO::FETCH_OBJ)) 
		{
			$notification = new notification($result->id, $result->idAccount, $result->type, $result->content, $result->isNew, $result->date);
			$results[] = $notification;
		}
		
		$query->closeCursor();

		return $results;
	}

	//------------------------------------------------------------
	//  Fonction 	getContentTimeNotification
	//  Auteur      Pipiro
	//------------------------------------------------------------
	//  Role		: Retourne la différence de temps pour les
	//				  notifications
	//
	//------------------------------------------------------------
	//  Entrée		: Date de la notification
	//  Sortie		: Contenue du temps pour la notification
	//------------------------------------------------------------
	public function getContentTimeNotification($date)
	{
		$minusTimestamp = time() - $date;
        $contentDate = "";

        if ($minusTimestamp < 60)
        {
            $contentDate = $minusTimestamp." secondes";
        }
        else if ($minusTimestamp < 3600)
        {
            $contentDate = variant_int($minusTimestamp/60)." minutes";
        }
        else if ($minusTimestamp < 216000)
        {
            $contentDate = variant_int($minusTimestamp/3600)." heures";
        }
        else
        {
            $contentDate = variant_int($minusTimestamp/86400)." jours";
        }

		return "il y a ".$contentDate;
	}

}
<?php

require_once 'AbstractPdoManager.class.php';

class PdoPlayerManager extends AbstractPdoManager 
{

	public function authenticate($username, $password)
	{
		$query = $this->pdo->prepare("SELECT id, username, password, isAdmin, isOnline, lastOnline FROM player WHERE username=:username");

		$query->bindValue(':username', $username);
		$query->execute();
			
		$result = $query->fetch(PDO::FETCH_OBJ);

		if($result && $result->password == (md5($password)))
		{
			return new Player($result->id, $result->username, $result->isAdmin, $result->isOnline, $result->lastOnline);
		}
	}
	
	public function register($username, $password)
	{
		$query = $this->pdo->prepare("
		INSERT INTO player (username, password)
		VALUES ('".$username."', '".md5($password)."')");
			
		$resultat=$query->execute();
	}
	
	public function isMailValid($email)
	{
		$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
		if(preg_match($Syntaxe,$email)) 
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	public function isUsernameExist($username)
	{
		$query = $this->pdo->prepare("SELECT id, username, isAdmin, isOnline, lastOnline FROM player WHERE username=:username");
			
		$query->bindValue(':username', $username);
		$query->execute();
			
		$result = $query->fetch(PDO::FETCH_OBJ) ;

		if($result)
		{
			return true;
		}
	}

}
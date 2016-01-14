<?php

class AccountToPlayer
{
	private $id;
	private $idPlayer;
	private $idAccount;

	
	public function __construct($id = null, $idPlayer = null, $idAccount = null) 
	{
		$this->id = $id;
		$this->idPlayer = $idPlayer;
		$this->idAccount = $idAccount;
	}

	public function getId() 
	{ 
		return $this->id; 
	}

	public function getIdPlayer() 
	{ 
		return $this->idPlayer; 
	}

	public function getIdAccount() 
	{ 
		return $this->idStat; 
	}

	public function setId($id) 
	{ 
		$this->id = $id; 
	}

	public function setIdPlayer($idPlayer) 
	{ 
		$this->idPlayer = $idPlayer; 
	}

	public function setIdAccount($idAccount) 
	{ 
		$this->idAccount = $idAccount; 
	}
}

?>
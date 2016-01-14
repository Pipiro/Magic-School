<?php

class MageToAccount
{
	private $id;
	private $idMage;
	private $idAccount;

	
	public function __construct($id = null, $idMage = null, $idAccount = null) 
	{
		$this->id = $id;
		$this->idMage = $idMage;
		$this->idAccount = $idAccount;
	}

	public function getId() 
	{ 
		return $this->id; 
	}

	public function getIdMage() 
	{ 
		return $this->idMage; 
	}

	public function getIdAccount() 
	{ 
		return $this->idStat; 
	}

	public function setId($id) 
	{ 
		$this->id = $id; 
	}

	public function setIdMage($idMage) 
	{ 
		$this->idMage = $idMage; 
	}

	public function setIdAccount($idAccount) 
	{ 
		$this->idAccount = $idAccount; 
	}
}

?>
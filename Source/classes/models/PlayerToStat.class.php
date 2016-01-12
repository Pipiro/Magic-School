<?php

class PlayerToStat
{
	//500 request(s) every 10 minute(s)
	//10 request(s) every 10 second(s)

	private $id;
	private $idPlayer;
	private $idStat;

	
	public function __construct($id = null, $idPlayer = null, $idStat = null) 
	{
		$this->id = $id;
		$this->idPlayer = $idPlayer;
		$this->idStat = $idStat;
	}

	public function getId() 
	{ 
		return $this->id; 
	}

	public function getIdPlayer() 
	{ 
		return $this->idPlayer; 
	}

	public function getIdStat() 
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

	public function setIdStat($idStat) 
	{ 
		$this->idStat = $idStat; 
	}
}

?>
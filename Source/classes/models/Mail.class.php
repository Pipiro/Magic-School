<?php

class Mail
{
	private $id;
	private $gold;
	private $level;
	private $experience;

	
	public function __construct($id = null, $gold = null, $level = null, $experience = null) 
	{
		$this->id = $id;
		$this->gold = $gold;
		$this->level = $level;
		$this->experience = $experience;
	}

	public function getId() 
	{ 
		return $this->id; 
	}

	public function getGold() 
	{ 
		return $this->gold; 
	}

	public function getLevel() 
	{ 
		return $this->level; 
	}

	public function getExperience() 
	{ 
		return $this->experience; 
	}

	public function setId($id) 
	{ 
		$this->id = $id; 
	}

	public function setGold($gold) 
	{ 
		$this->gold = $gold; 
	}

	public function setLevel($level) 
	{ 
		$this->level = $level; 
	}

	public function setExperience($experience) 
	{ 
		$this->experience = $experience; 
	}
	
}

?>
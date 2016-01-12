<?php

class Player
{
	//500 request(s) every 10 minute(s)
	//10 request(s) every 10 second(s)

	private $id;
	private $sexe;
	private $life;
	private $strength;
	private $speed;
	private $age;
	private $agility;
	private $power;
	private $precision;

	
	public function __construct($id = null, $sexe = null, $age = null, $life = null, $strength = null, $speed = null, $agility = null, $power = null, $precision = null) 
	{
		$this->id = $id;
		$this->sexe = $sexe;
		$this->life = $life;
		$this->strength = $strength;
		$this->speed = $speed;
		$this->age = $age;
		$this->agility = $agility;
		$this->power = $power;
		$this->precision = $precision;
	}

	public function getId() 
	{ 
		return $this->id; 
	}

	public function getSexe() 
	{ 
		return $this->sexe; 
	}

	public function getLife() 
	{ 
		return $this->life; 
	}

	public function getStrength() 
	{ 
		return $this->strength; 
	}

	public function getSpeed() 
	{ 
		return $this->speed; 
	}

	public function getAge() 
	{ 
		return $this->age; 
	}

	public function getAgility() 
	{ 
		return $this->agility; 
	}

	public function getPower() 
	{ 
		return $this->power; 
	}

	public function getPrecision() 
	{ 
		return $this->precision; 
	}

	public function setId($id) 
	{ 
		$this->id = $id; 
	}

	public function setSexe($sexe) 
	{ 
		$this->sexe = $sexe; 
	}

	public function setLife($life) 
	{ 
		$this->life = $life; 
	}

	public function setStrength($strength) 
	{ 
		$this->strength = $strength; 
	}

	public function setSpeed($speed) 
	{ 
		$this->speed = $speed; 
	}

	public function setAge($age) 
	{ 
		$this->age = $age; 
	}

	public function setAgility($agility) 
	{ 
		$this->agility = $agility; 
	}

	public function setPower($power) 
	{ 
		$this->power = $power; 
	}

	public function setPrecision($precision) 
	{ 
		$this->precision = $precision; 
	}
}

?>
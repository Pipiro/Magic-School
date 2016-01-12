<?php

interface PlayerManager 
{
	function register($username, $password);
	function login($username, $password);
	function logout();
}

?>
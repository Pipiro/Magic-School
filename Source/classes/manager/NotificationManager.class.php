<?php

interface NotificationManager 
{
	function getNotificationsByAccount($idAccount);
	function getContentTimeNotification($date);
	function addNotification($idAccount, $type, $content);
	function updateStatutNotification($id);
}

?>
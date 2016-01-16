<?php

interface NotificationManager 
{
	function getNotificationByAccount($idAccount);
	function addNotification($idAccount, $type, $content);
	function updateStatutNotification($id);
}

?>
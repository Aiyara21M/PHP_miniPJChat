<?php 
require_once "./connect/connect.php";
$time = new DateTime();
$time->setTimezone(new DateTimeZone('Asia/Bangkok'));

// ------------------------------------------------------------------------------------------------------
$dataUser1 = $controller->Datauser($_COOKIE['Show_id']);
$result = $controller->getChatroom($dataUser1['id'], $_COOKIE['main_userid']);
// -------------------------------------------------------------------------------------------------------

?>
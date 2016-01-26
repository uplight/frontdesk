<?php
session_start();
$time = time();

$timeout = $time-(isset($_SESSION['time'])?$_SESSION['time']:0);

$subject = $_SERVER['QUERY_STRING'];
$_SESSION['time'] = $time;
$text = file_get_contents('php://input')."\n".date("Y-m-d H:i:s")."\n\r" ;

if($timeout<10)echo 'error '.$timeout;
else echo mail('uplight.ca@gmail.com',$subject,$text)?'success':'error email';

?>
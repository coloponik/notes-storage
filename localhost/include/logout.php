<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	session_start();
	unset($_SESSION['auth']);
	setcookie('account','',0,'/');
	echo 'true';
}
?>
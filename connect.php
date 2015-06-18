<?php
	require_once('db.php');
if(!$dbconn = mysql_connect("", "", "")) {
	echo 'Could not connect to mysql on ' . DB_HOST . '\n';
exit;
}
echo 'Connected to mysql <br />'
;
if(!mysql_select_db("", $dbconn)) {
	echo 'Could not user database ' . DB_NAME . '\n';
	echo mysql_error() . '\n';
	exit;
}
echo 'Connected to database ' . DB_NAME;
?>


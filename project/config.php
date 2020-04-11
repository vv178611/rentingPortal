<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* Important Note: If changed anything here, please change project/dbqueries/create/database.php file also
for the changes to be reflected properly. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'rent_portal');
 
/* Attempt to connect to MySQL database */

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
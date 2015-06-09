<?php

$host = "us-cdbr-iron-east-02.cleardb.net";
$user = "b9bca6fa05befc";
$pass = "9c431886";
$dbname = "heroku_a9c6a2054514d49";

try {
 	# MySQL with PDO_MYSQL
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

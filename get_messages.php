<?php 
include 'database.php';

$getMessages = $dbh->prepare("SELECT * FROM shouts ORDER BY idshouts ASC");
$getMessages->execute();
$messages = $getMessages->fetchAll();


?>
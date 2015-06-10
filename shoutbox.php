<?php 
error_reporting(E_ALL);


if(isset($_POST['name']) && isset($_POST['message'])){
    try {
        // NOTICE: prepare() used and VALUES instead of VALUE
        $STH = $DBH->prepare("INSERT INTO shouts (name, message, date) values (:name, :message, :date)");

		$STH->bindParam(':name', $_POST['name']);
	    $STH->bindParam(':message', $_POST['message']);
	    $STH->bindParam(':date', $_POST['date']);
		
		// NOTICE: $data has allready been supplied by bindParam()
        $STH->execute();
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>
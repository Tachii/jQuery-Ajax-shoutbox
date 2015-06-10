<?php 
include 'database.php';

if(isset($_POST['name']) && isset($_POST['message'])){
    try {
        // NOTICE: prepare() used and VALUES instead of VALUE
        $sth = $dbh->prepare("INSERT INTO shouts (name, message, date) values (:name, :message, :date)");

        $sth->bindParam(':name', $_POST['name']);
        $sth->bindParam(':message', $_POST['message']);
        $sth->bindParam(':date', $_POST['date']);

        // NOTICE: $data has allready been supplied by bindParam()
        $sth->execute();
		
		echo '<li>'.$_POST['name'].': '.$_POST['message'];
		
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>
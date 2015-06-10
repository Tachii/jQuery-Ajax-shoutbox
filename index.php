<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>jQuery ShoutBox</title>
		<meta name="description" content="">
		<meta name="author" content="tachi">
		
		<link rel="stylesheet" href="css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/script.js"></script>
		
		<?php 
			include 'get_messages.php';
		?>
		
	</head>

	<body>
		<div id="container">
			<header>
				<h1>ShoutBox</h1>
			</header>
			<div id="shouts">
				<ul>
				<?php foreach($messages as $message): ?>
					<li><?php echo $message['name']; ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<footer>
				<form>
					<label>Name:</label>
					<input type="text" id="name" name="name" value=""/>
					<label>Message :</label>
					<input type="text" id="message" name="message" value=""/>
					<input type="submit" id="submit" value="SHOUT!" />
				</form>
			</footer>
		</div>
	</body>
</html>

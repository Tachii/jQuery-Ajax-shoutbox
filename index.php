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
		
		
	</head>

	<body>
		<div id="container">
			<header>
				<h1>ShoutBox</h1>
			</header>
			<div id="shouts">
				<ul>
					<li></li>
				</ul>
			</div>
			<footer>
				<form>
					<label>Name:</label>
					<input type="text" id="name"/>
					<label>Message :</label>
					<input type="text" id="message"/>
					<input type="submit" id="submit" value="SHOUT!" />
				</form>
			</footer>
		</div>
	</body>
</html>

<?php

require 'includes/Database.php';

$db = new Database(
	localhost,
	login,
	'root',
	'root'
);

echo $db->connexion();
	
?>
<!DOCTYPE html> 
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Base de donnée: connexion</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<form action="include/user.php" method="action">
		<h1>Connectez-vous</h1>
		<input type="text" name="username" placeholder="Username" class="input">
		<input type="password" name="pass" placeholder="password" class="input">
		<input type="submit" value="sign up" class="submit">
	</form>
</body>
</html>
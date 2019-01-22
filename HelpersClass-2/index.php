<?php
	require "html.php";

	$html = new Html();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $html->charset('UTF-8'); ?>
	<title>training POO</title>
	<?php echo $html->style('assets/css/style.css'); ?>
</head>
<body>
	<h1>POO - Training</h1>
	<?php echo $html->image('assets/img/img1.jpg', 'écran code'); ?>
	<?php echo $html->link('https://github.com/JustineCrenier/POO-training','Repo Github'); ?>
	
	<button id="test">tester le js</button>
	<!-- lien js -->
	<?php echo $html->jsfile('assets/js/script.js'); ?>
</body>
</html>
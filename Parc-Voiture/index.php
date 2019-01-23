<?php
	
	require 'assets/php/Voiture.php';

	$voiture1 = new Voiture(
		'CZcdef',
		'2015',
		'150000',
		'berlin',
		'Audi', 
		'rouge',
		'2 fdp'
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parc de voiture</title>
</head>
<body>
	<?php echo $voiture1->display(); ?>
</body>
</html>

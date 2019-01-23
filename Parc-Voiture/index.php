<?php
	
	require 'assets/php/Voiture.php';

	$voiture1 = new Voiture(
		'BEcdef',
		'2015',
		'150000',
		'Cabriolet',
		'Audi', 
		'rouge',
		'2 tonnes',
		'audi.jpg'
	);

	$voiture2 = new Voiture(
		'DEcdef',
		'2018',
		'50000',
		'SUV',
		'Ford',
		'bleu',
		'3.5 tonnes',
		'suv.jpg'
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parc de voiture</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php echo $voiture1->display(); ?>
	<?php echo $voiture2->display(); ?>
</body>
</html>

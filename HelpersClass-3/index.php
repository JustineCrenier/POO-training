<?php
require 'assets/page/Form.php';
require 'assets/page/Html.php';
require 'assets/page/Validator.php';

$html = new Html();
$form = new Form();
$validator = new Validator();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $html->charset('UTF-8'); ?>
	<title>Class Validator</title>
	<?php echo $html->style('assets/css/style.css'); ?>
</head>
<body>
	<?php
		echo $form->create('index.php');
		echo $form->input('text' ,'str', 'une chaîne de caractère');
		echo $form->input('number', 'int', 'un entier');
		echo $form->input('text', 'float', 'un nombre à virgule');
		echo $form->submit('Envoyer');

		$str = $validator->sanitizeStr('str');
		$int = $validator->sanitizeInt('int');
		$float = $validator->sanitizeFloat('float');

		echo $str.'<br>'.$int.'<br>'.$float;

		echo $form->end();
	?>
</body>
</html>


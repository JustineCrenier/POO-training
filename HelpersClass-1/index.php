<?php
	
	require "form.php";

	$form = new Form();
	echo $form->create('document');
	echo $form->text('nom','Votre nom et prenom');
	echo $form->startSelect('option');
	echo $form->option('faites un choix');
	echo $form->option('option 1');
	echo $form->option('option 2');
	echo $form->endSelect();
	echo $form->textarea('text', 5, 33, 'entrez votre texte ici');
	echo $form->paragraphe('plusieurs radio boutons.');
	echo $form->radio('premier','choix');
	echo $form->radio('deuxieme','choix');
	echo $form->paragraphe('plusieurs checkbox');
	echo $form->checkbox('bouton1');
	echo $form->checkbox('bouton2');
	echo $form->submit('Envoyer');
	echo $form->end();
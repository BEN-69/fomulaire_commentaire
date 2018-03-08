<?php
//Si l'id passé en parametre dans l'url n'existe pas, c'est que le visiteur a �t� amenen� ici par hasard
if(!isset($_GET['id'])) {
	//Donc on redirige vers registre.php
	header('Location: index.php');
	//Puis on stoppe l'exécution du script
	exit();
}
//On r�cup�re l'array des commentaire
$news = unserialize(file_get_contents('news.txt'));
//Puis l'id pass� en param�tre
$id = (int) $_GET['id'];

//Si le commentaire existe
if(isset($news[$id])) {
	//On efface l'index correspondant � l'id du commentaire
	unset($news[$id]);
	
	//Puis on sauvegarde le tout
	file_put_contents('news.txt', serialize($news));

	header('Location: index.php');
}
else {
	echo 'La news n\'existe pas.';
}


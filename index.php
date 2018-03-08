<!doctype html>
<html>
    <head>
        <title>Livre d'or</title>
         <link rel="stylesheet" media="screen" type="text/css" title="livre_or" href="bootstrap.min.css"/>
    </head>
    <body>
        
    <div class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li>
            <a href="index.php">Livre d'or</a>
        </li>               
    </ul>
    </div> 
<!--  container-->
<div class="container">
    
    <div class="col-md-10 col-xs-10 spacer"> 
    	<!-- Partie  traitement  Ajouter une commentaire dans le fichier news.txt  -->     
    	<?php
        if (isset($_POST['text']) && isset($_POST['nom'])) {
            //On definit les variables
            if (!empty($_POST['nom']) AND !empty($_POST['text'])) {
                // Si on a quelque chose a enregistrer
                extract($_POST);
                $text = $_POST['text'];
                $nom = $_POST['nom'];
                //On recupere les donnees deje existantes
                $news = unserialize(file_get_contents('news.txt'));
                $news[] = array('nom' => $nom, 'text' => $text);
                file_put_contents('news.txt', serialize($news));
            } else {
               
                echo " <p class='bg-danger'> Vous n'avez pas remplie tous les champs du formulaire</p> ";
            }
        
        }
        ?>
         <!-- Fin traitement  Ajouter une commentaire --> 
    
    
        
        <!-- formulaire  Ajouter une commentaire -->
        <div class="panel panel-default spacer">
           
            <div class="panel-heading">
            Ajouter une commentaire
            </div>
            <div class="panel-body">
                
                <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                <label for="nom" class="col-sm-2 control-label">Nom </label>
                <div class="col-sm-10">
                <input type="nom" class="form-control" name="nom" placeholder="Nom">
                </div>
                </div>
                <div class="form-group">
                <label for="text" class="col-sm-2 control-label">Commentaire </label>
                <div class="col-sm-10">
                <textarea name="text"  rows="6" class="form-control" placeholder="Votre commentraire"></textarea>
            
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Soumettre" class="btn btn-default"/>
                
                </div>
                </div>
                </form>
            </div>
        </div>
    
        <!-- Fin formulaire  Ajouter une commentaire -->
        
        
    	<!--  Affichez la liste des messages-->
        <div class="panel panel-info spacer">
            <div class="panel-heading">
            Affichez la liste des messages
            </div>
            <div class="panel-body">
                <?php
                
                $liste_news = unserialize(file_get_contents('news.txt'));
                
                if(!empty($liste_news)) {
                
                foreach($liste_news as $id => $news) {
                $news = array_map('htmlspecialchars', $news);
                ?>
                
                <h4>Ajout&eacute;e par <?php echo $news['nom'] ?></h4>
                
                <p><?php echo $news['text'] ?></p>
                <a href="deleteCommentaire.php?id=<?php echo $id ?>"
                onclick="return confirm('Etes-vous s&ucirc;r de vouloir supprimer ce commentaire ?');">Supprimer</a>
                
                
                <?php
                }
                }
                else {           
                echo '<p class="bg-success">Il n\'y a aucune Commentaire pour le moment </p>';
                }
                ?>
            </div>  
        </div> 
        <!--  Affichez la liste des messages--> 
    </div> 

</div>
<!--  Fin container-->
</body>
</html>



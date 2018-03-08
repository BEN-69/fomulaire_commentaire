<!doctype html>
<html>
    <head>
        <title>Livre d'or</title>
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
        
    </div> 

</div>
<!--  Fin container-->
</body>
</html>


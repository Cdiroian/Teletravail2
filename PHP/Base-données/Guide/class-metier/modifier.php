<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Exercice Guide Duchemin </title>
    <style>
    input[type='text'] { margin:15px 20px; background-color:#E6E6E6;  }
	  label { margin-left:10px;margin-right:10px}
	  fieldset {margin-top:50px; width:50%; margin-left:auto; margin-right:auto;}
	  #btnsub { width:100%; text-align:right}
    </style>
  </head>
  
  <body>
  <?php
    include ("class-metier/detail.php");
    $message="";
    if(!empty($_POST["nom"]) && !empty($_POST["adresse"]) &&  !empty($_POST["prix"]) && !empty($_POST["commentaire"]) && !empty($_POST["note"]) && !empty($_POST["visite"]) )
    
    {  
             $matable= new myTable("restaurants");
            
            $modifligne=$matable->modifierLigne($_POST['idLigne'],addslashes($_POST["nom"]),addslashes( $_POST["adresse"]),$_POST["prix"],addslashes($_POST["commentaire"]),
            $_POST["note"],$_POST["visite"]); 
            
        if($modifligne==1)
            { 
            echo "critique modifiée";
      
    
          echo '<br><div class="form-group form-button" id="btnsub" ><input type="button" class="btn btn-primary" id="retour" name="retour" value="Retour au listing" /></div>';
  
          echo"<script>
              creation=document.getElementById('retour');
                  creation.addEventListener('click', function () { window.location.href='index.php';}); 
              </script>";
  
          } 
      else
          { $message.="Erreur odification des odnnées veuillez  recommencer";
                  echo $message;
               echo '<br><div class="form-group form-button" id="btnsub" >
                        <input type="button" class="btn btn-primary" id="retour" name="retour" value="Retour au listing" />
                      </div>';
          
              echo"<script>
              creation=document.getElementById('retour');
              creation.addEventListener('click', function () { window.location.href='index.php';}); 
              </script>";
      
      
       }
     
    
    } 
    
    else 
    {
                    if(isset($_POST["valider"])){
                       $message.="<p style='color:red'> Toutes les zones de saisie ne sont pas remplies! Veuillez recommencer ! </p>" ;}
                                               else
                                              {
                                                  $message=""; 
                                                  
                                              }
                  echo $message;
      
                 echo'<fieldset><legend>modifier une critique d\'établissement</legend>	<div class="form-group">';
   
   
            echo'<form  action="'.$_SERVER['PHP_SELF'].'" method="POST" enctype="multipart/form-data">';
             
             
             if(isset($_POST["idmod"]))
              {
                   echo '<br><div class="form-group form-button" id="btnsub" ><label for="idligne">ligne à modifier</label>
            <input type="text" class="form-control" id="idligne" name="idligne" value="'.$_POST["idMod"].'" style="max-width:50px"  readonly="readonly" />
          </div>';
                  }
                  else 
                  {
                      echo "Il manque une variable pour modifier le contenu";	
                  }
            
              
           
           echo'<label for="nom">Nom restaurant</label>
                  
          <input type="text" class="form-control"  id="nom" name="nom" placeholder="nom" style="max-width:250px" value="';
           
           echo(!empty($_POST["nom"]))? $_POST["nom"]:""; 
           echo'" />';
          
          echo '</div>
           <div class="form-group">
           <label for="nom">Adresse restaurant</label>
                  <input type="text" class="form-control"  id="adresse" name="adresse" style="max-width:250px" placeholder="adresse" value="';
                  
           echo(!empty($_POST["adresse"]))? $_POST["adresse"]:""; 		
          echo'" />
          </div>
          
          <div class="form-group">
           <label for="prix" >prix moyen repas: </label>
                                  
            <input class="form-control" type="number" step="0.01" id="prix" name="prix" style="max-width:100px"  placeholder="prix" value="';
            
            echo(!empty($_POST["prix"]))? $_POST["prix"]:""; 	
               echo'" />
            </div>
            </div>
           <div class="form-group">
           <label for="nom">Commentaire restaurant</label>
                  <textarea class="form-control"  id="commentaire" name="commentaire" placeholder="votre commentaire ici" >';
                  
                   echo(!empty($_POST["commentaire"]))? addslashes($_POST["commentaire"]):""; 	
                  echo'</textarea>
          </div>
          <div class="form-group">
           <label for="note" >Note restaurant: </label>
                                  
            <input class="form-control" type="text" id="note" name="note"  style="max-width:100px" placeholder="note/10" value="';
            
             echo(!empty($_POST["note"]))? $_POST["note"]:""; 	
            
            echo '" />
            </div>
             
            <div class="form-group">
           <label for="date" >Date visite du restaurant:( client mystère) </label>
           
           
                                  
            <input class="form-control" type="date" id="visite" name="visite"  placeholder=""  style="max-width:250px"   value="';
               echo(!empty($_POST["visite"]))? $_POST["visite"]:""; 
            echo '" />
            </div>
                               
              <div class="form-group form-button" id="btnsub" >				  
           <button type="submit" class="btn btn-primary" name="valider" >Submit</button>
              </div>
              </fieldset>
               </form>'; 
          
    }

   
  ?>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
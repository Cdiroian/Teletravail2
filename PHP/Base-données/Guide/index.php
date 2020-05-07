<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Exercice 2 prêt bancaire Webserveur PHP </title>
    <style>
    input[type='text'] { margin:15px 20px; background-color:#E6E6E6;  }
	  label { margin-left:10px;margin-right:10px}
	  fieldset {margin-top:50px; width:50%; margin-left:auto; margin-right:auto;}
	  #btnsub { width:100%; text-align:right}
    </style>
  </head>
  
  <body>
  <?php
    
    require_once("class-metier/base.php");

   /* '
    <form  action="'.$_SERVER['PHP_SELF'].'" method="POST" enctype="multipart/form-data">
      <fieldset><legend>ACCES MEMBRE</legend>	
        <div class="form-group">
          <label for="identifiant">Identifiant : </label>

          <input type="text" class="form-control"  id="identifiant" name="identifiant" placeholder="identifiant restaurant" />

        </div>
        <div class="form-group">
          <label for="nom" >Nom : </label>
       
          <input class="form-control" type="text" id="nom" name="nom" value="" placeholder="nom restaurant"  />

        </div>
        <div class="form-group">
          <label for="address" >adresse : </label>
       
          <input class="form-control" type="text" id="address" name="address" value="" placeholder="addresse restaurant"  />

        </div>
        <div class="form-group">
          <label for="prix" >Prix (en €) : </label>
       
          <input class="form-control" type="text" id="prix" name="prix" value="" placeholder="prix moyen restaurant"  />

        </div>
        <div class="form-group">
          <label for="coment" >commentaire : </label>
       
          <input class="form-control" type="text" id="coment" name="coment" value="" placeholder="commentaire restaurant"  />

        </div>
        <div class="form-group">
          <label for="note" >note : </label>
       
          <input class="form-control" type="text" id="note" name="note" value="" placeholder="note restaurant"  />

        </div>
        <div class="form-group">
          <label for="date" >adresse : </label>
       
          <input class="form-control" type="date" id="date" name="date" value="" placeholder="date comentaire"  />

        </div>
        <div class="form-group form-button" id="btnsub" >				  
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </fieldset>
    </form>'; */
  ?>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
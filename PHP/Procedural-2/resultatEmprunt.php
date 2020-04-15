doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Exercice 1 affichage resultat du calcul de l'impôt</title>
    <style>
      body {background: #DFCE76; color: #000}
		  form {text-align: center}
      th, td {border: 1px solid #ff9}
      .pair {background: #440; color: #ff9}
		  .impair {background: #040; color: #9f9}
    </style>
  </head>
  
  <body>
  
  
    <h1>Affichage resultat</h1>

<?php
  $pair = false;
  $capEmpr = $_POST['capEmpr'];
  $tauxInteret = $_POST['taux'];
  $nbAnnee = $_POST['annee'];
  $taux = $_POST['taux'] / 100;
  $interet = $_POST['capEmpr'] * 3 / 100;
  $nbrMois = $nbAnnee *12;
  $montantMensuel = ($capEmpr / $nbAnnee) / 12;
  $montantInteret = ( $interet / $nbAnnee) /12;
  $an = "";

  if ($nbAnnee <= 1)
  {
    $an = "année"
  }
  else
  {
    $an = "années"
  }
  echo "<p>Le montant emprunté est: ".$capEmpr."€, les intérêts sont de: ".$tauxInteret."%, la durée du crédit est sur: ".$nbAnnee." ".$an."</p>
		<table>
    <tr><th>mois</th><th>capital du restant</th><th>intérêts restant</th></tr>";
    
    for($i = 1; $i < $nbrMois; $i++) {
      if($pair == true){
        $afficherMontant = number_format ($capEmpr, 2);
        $afficherInterets = number_format ($interet, 2);
        echo "<tr class=\"pair\"><td class=\"pair\">".$i."</td><td class=\"pair\">".$afficherMontant."</td>
        <td class=\"pair\">".$afficherInterets."</td></tr>";

        $capEmpr = $capEmpr - $montantMensuel;
        $interet = $interet - $montantInteret;
        $pair = false;
      }
      else {
        $afficherMontant = number_format ($capEmpr, 2);
        $afficherInterets = number_format ($interet, 2);
        
        echo "<tr class=\"pair\"><td class=\"pair\">".$i."</td><td class=\"pair\">".$afficherMontant."</td>
        <td class=\"pair\">".$afficherInterets."</td></tr>";

        $capEmpr = $capEmpr - $montantMensuel;
        $interet = $interet - $montantInteret;
        $pair = true;
      }

      
    }
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
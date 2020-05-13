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
    
    session_start();

    include("class-metier/base.php");
    

    $monObjetTable=new Mytable("restaurants");

    $monObjetTable->affichContenuTable();
    $options=array(

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_CASE =>  PDO::CASE_NATURAL,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM
    );

    $db="";
    
    try{
      $db = new PDO('mysql:host=localhost; dbname=guide','root','', $options);
    } catch ( PDOException $e)
    {
      die("Database connection failded". $e->getMessage());

      echo $e-> getMessage();
    }

    /* function cherchNomCol ($_table)
    {
      $rq="select * from".$_table;
        $resultat=$_db->query($rq);
        $select_messages=$_db->execute();
        $nbCol=$resultat->columnCount();
        $tabNomCol=array();
        for($i=0; $i<$nbCol;$i++){
          $tab=$resultat->getColumnMeta($i);

          $tabNomCol[$i]=$tab['name'];
        }
        //echo var_dump($tabNomCol);

        return $tabNomCol;
    } */


    
   /*  function afficherTable($_table,$_db){

      echo'<tble classe="table-dark tablehover" >
      <tbody>';
      
      $tabNoms= cherchNomCol($_table,$_db);

      
      echo "<th>".$tabNoms."</th>";
      
      $rq="select * from".$_table;
      $select_messages=$db->prepare($rq);
        $select_messages->execute();

      
      while($tabligne=$select_messages->fetch())
      {
        echo"<tr>";

        for($i=0; $i<sizeof($tabligne);$i++){

          if($i==3)
          {
            
            echo"<td>".$tabLigne[$i]."</td>";

          }
          else{
            echo"<td>".$tabLigne[$i]."</td>";
          }
          
          echo"<td>".$tabligne[$i]."</td>";
        }

        echo "</tr>";
      }


      echo' </tbody></table>';
    } */
   
  ?>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
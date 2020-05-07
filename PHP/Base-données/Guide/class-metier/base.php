<?php


class myTable{
  
  public $connex;

  public function getConnex(){

    $connex = @mysqli_connect("localhost","root","","guide") or die("Erreur de connexion !!!!");

    $res = mysqli_query($connex,"select * from restaurant");
    echo mysqli_num_rows($res)."enregistrement(s) dans la table";
    echo "<hr/>";
    while($tab=mysqli_fetch_assoc($res)){
  
      echo implode("----",$tab);
      echo "<br />";
  
    }

  }
 
  
}
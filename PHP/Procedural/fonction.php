<?php 
       
  define ('taux_0',0.09);
  define ('taux_1',0.14);
       
  function calcul_impot($revenu) 
  {
    $res=0;
            
    if ($revenu <= 15000) //test de la variable $revenu
    {
      $res=$revenu * taux_o;
    }
    else
    {
      $res=(15000*taux_0) + ($revenu - 15000)*taux_1;
    } 
    return $res;
  }
?>
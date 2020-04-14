<?php 
  define ('K' = capEmpr);
  define ('ta',0.315);
  define ('an' = nbAnnee);
  define ('Tm',ta/12);
  define ('n', an*12);
  define ('Q',(1-(1+Tm)-n));
  define ('a',(K*Tm)/Q);
  
  function CalculVPM($Mensualite , $interet , $capEmpr){
    $t_mensuel=$interet/12;
    $t_mensuel = $t_mensuel / 100 ;
    $R=(1-pow((1+$t_mensuel), -$Mensualite))/$t_mensuel; 
     
    $VPM=(($capEmpr)/$R); 
     
    return $VPM; 
     }
?>
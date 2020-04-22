<?php


$emprunt=0;

$tauxInt=0;

$nbRembAnnee=0;

echo"<form action='' method='post' class='form'>

    <h2>Calcul de mensualité d'un pret</h2>";

    echo "Capital emprunté € :
        <input type='text' placeholder='Capital Emprunté €...' name='emprunt' 
        id='emprunt'size='10' maxlength='10'/>

    Taux d'Intérêts (en %) : 
        <input type='text' placeholder='Taux des Intérêts (en %) ...' name='tauxInt' id='tauxInt' value='' size='10' maxlength='10'/>

    Durée du Prêt (en année) : 
          <input type='text' placeholder='Durée du Prêt (en année) ...' name='nbRembAnnee' id='nbRembAnnee' value='' size='10' maxlength='10'/>
    
          <button type='submit' id='valider' name='valider' title='' value='Envoyer'> <span>Calculer</span> </button>
           
</form>";

if(isset($_POST['valider'])){
    $emprunt=floatval($_POST['emprunt']);
    $tauxInt=floatval($_POST['tauxInt']);
    $nbRembAnnee=floatval($_POST['nbRembAnnee']);

    if($emprunt>0 && $tauxInt>0 && $nbRembAnnee>0){
        $annuel = $emprunt*$tauxInt/(1-(1+$tauxInt)-$nbRembAnnee);
        $mensualite = $annuel/12;
        $mensualite = $mensualite *-1;
    
        echo "<div class='textField blanc textcentrer'><h2>Votre Mensualité sera de : ".$mensualite." € </h2></div>";
    
    }
    else
    {
     echo"<div class='textField blanc textecentrer'><h2>Veuillez renseigner tous les champs</h2></div>";
    }
}
<?php

class financier 
{
    public $capital;

    public $tauxMensuel;

    public $nbMois;

    public function __construct($_kal, $_tauxAnnuel, $_annees)
    {

        $this->capital=$_kal;
        $this->tauxMensuel=(double)$_tauxAnnuel/(100*12);
        $this->nbMois=$_annees*12;
    }
    public function calculMensualite()
    {
       /*(1- pow((1+$tm),-$n) )*/
        $quotient=(1- pow(( 1+$this->tauxMensuel),-$this->nbMois));
        $mensualite=($this->capital*$this->tauxMensuel)/$quotient;
        $coutTotal= (($mensualite*($this->nbMois*12))-$this->capital)+$this->capital;
        return $mensualite;
    }

     public function coutTotal()
    {
        /*le coût total est, bien sûr, égal à :
        C = M*an - S */
        
        $coutTotal= ($mensualite*($this->nbMois*12))-$this->capital;

        return $coutTotal;
    } 
}

?>
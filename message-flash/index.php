<?php
session_start();
//Message de succés
if(isset($_GET['setFlash1'])){
    $_SESSION['flash'] []= array (
        "type" => "success",
        "message" => "Bravo c'est un succés!!!"
    );
}
//Message d'alerte
if (isset($_GET['setFlash2'])){
    $_SESSION['flash']  [] = array (
        "type" => "warning",
        "message" => "Vous n'êtes pas autorisé!!!"
    );
}
//Message d'érreur
if(isset($_GET['setFlash3'])){
    $_SESSION['flash']  []= array (
    "type" => "error",
    "message" => "Alerte tentative d'intrusion?!?!"
);

}
// Plusieurs Messages
if(isset($_GET['setFlash4']))
{
    $_SESSION['flash']  []= array (
        "type" => "success",
        "message" => "Bravo c'est un succés!!!"
    );
    $_SESSION['flash']  [] = array (
        "type" => "warning",
        "message" => "Vous n'êtes pas autorisé!!!"
    );
    $_SESSION['flash']  []= array (
        "type" => "error",
        "message" => "Alerte tentative d'intrusion?!?!"
    );

}
print_r($_SESSION['flash']);


include('Templates/base.html');

?>
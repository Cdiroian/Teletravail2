<?php
$options=array("cost"=>12);

echo password_hash("Belmondo",PASSWORD_DEFAULT,$options)."<br>";
echo password_hash("Ventura",PASSWORD_DEFAULT,$options)."<br>";
echo password_hash("Blier",PASSWORD_DEFAULT,$options)."<br>";
echo password_hash("Lecoq",PASSWORD_DEFAULT,$options)."<br>";



?>
<?php
 
header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 
 
$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
   $inF = fopen("ip.txt","a");
fputs($inF,$variable1."\n");
fclose($inF);
 
?>

<?php
header('Content-Type: text/plain');
 
$variable1 = isset($_GET['variable1']) ? $_GET['variable1'] : null;
if ($variable1) {
  $inF = fopen('ip.txt', 'a');
  fputs($inF, $variable1. "\n");
  fclose($inF);
  echo 'Inscription de l’IP réussie';
} else {
  echo 'Information manquante dans la requête';
}

?>

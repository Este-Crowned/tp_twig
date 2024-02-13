<?php

require_once(__DIR__ . "/include/init_twig.php");
$twig = init_twig();

$template = $twig->load("accueil.twig");

$produits = json_decode(file_get_contents("json/produits.json"));
echo $template->render(["produits"=> $produits]);


?>
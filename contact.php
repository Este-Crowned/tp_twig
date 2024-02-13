<?php

require_once(__DIR__ . "/include/init_twig.php");
$twig = init_twig();
$template = $twig->load("contact.twig");
$employes = json_decode(file_get_contents("json/employes.json"));
echo $template->render(["employes"=> $employes]);


?>
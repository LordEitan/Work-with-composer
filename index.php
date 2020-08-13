<?php

require_once 'vendor/autoload.php';

include_once 'templates/data.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('main_page.php', [
    'articles'=>$data
]);
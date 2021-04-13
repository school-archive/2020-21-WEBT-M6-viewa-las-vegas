<?php

// namespace Htlw3r\m6-viewa-las-vegas;

require_once './vendor/autoload.php';
require_once "hotel.php";

// initiate TWIG
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => './compilation_cache',
]);



// Liste der Hotels kommt aus PHP
$hotels = array(
    new hotel("Hotel Bellagio", 1, array("asdas", "asdas"),"Hotel Bellagio", "Hotel Bellagio", "Hotel Bellagio"),
    new hotel("Hotel Bellagio", 1, array("asdas", "asdas"),"Hotel Bellagio", "Hotel Bellagio", "Hotel Bellagio"),
    new hotel("Hotel Bellagio", 1, array("asdas", "asdas"),"Hotel Bellagio", "Hotel Bellagio", "Hotel Bellagio")
);

echo $twig->render(
    'hotels.twig.html',
    ['hotels' => $hotels]
);

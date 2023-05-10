<?php
include 'Painting.php';
$p = new painting(
    "Guernica",
    "Picaso",
    "1937",
    "oil on cavas"
);
echo "\nArt Name:" . $p->getName();
echo "\nArtist Name:" . $p->getArtist();
echo "\nArt medium :" . $p->getMedium();
$p->setMedium("paper");
echo "\nNew medium :" . $p->getMedium();

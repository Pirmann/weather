<?php

use Pirmann\Weather\Tag;
use Pirmann\Weather\History;
require 'vendor/autoload.php';

$tag1 = new Tag('2024-05-30', 'sonnig');
$tag2 = new Tag('2024-05-30', 'schön');

$history = new History($tag1);
$history->addToVerlauf($tag2);

foreach ($history->getVerlauf() as $item) {
    echo $item->getWeather()." ";
    echo $item->getTag()."</br>";
}
echo $history->getDay('2024-05-30');
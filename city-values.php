<?php

require_once __DIR__."/resources/data.php";

$allCities = [];

foreach($teams as $team){
    $allCities[] = $team['city'];
}

$uniqueCities = array_unique($allCities);
sort($uniqueCities);
echo implode(", ", $uniqueCities);

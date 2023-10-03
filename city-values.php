<?php

require_once __DIR__ . "/resources/data.php";

$allCities = [];

// Puss all city values to $allCities array
foreach ($teams as $team) {
    $allCities[] = $team['city'];
}

// Return only unique strings from array and sort alphabetically
$uniqueCities = array_unique($allCities);
sort($uniqueCities);

// Implode list all strings with separating comma and blank space
echo implode(", ", $uniqueCities);

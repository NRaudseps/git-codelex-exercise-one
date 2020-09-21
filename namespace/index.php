<?php

require_once 'app/Taste.php';
require_once 'app/Taste/Sweet.php';
require_once 'app/Taste/Salty.php';

use App\Taste\Salty;
use App\Taste\Sweet;

$pizza = new Salty();
$candy = new Sweet();

echo $pizza->getTaste() . PHP_EOL;
echo $candy->getTaste() . PHP_EOL;
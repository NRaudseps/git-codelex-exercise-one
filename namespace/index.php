<?php

require_once 'app/Taste.php';
require_once 'app/Salty.php';
require_once 'app/Sweet.php';

use App\Taste\Salty;
use App\Taste\Sweet;

$pizza = new Salty();
$candy = new Sweet();

echo $pizza->getTaste() . PHP_EOL;
echo $candy->getTaste() . PHP_EOL   ;
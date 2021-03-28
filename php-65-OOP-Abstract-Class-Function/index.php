<?php

require_once "data/Location.php";

use Data\{Location, City, Country};

// $location = new Location(); // error

$city = new City();
echo "City of " . $city->setName("Yogyakarta") . PHP_EOL;

$country = new Country();
echo "Country of " . $country->setName("Indonesia") . PHP_EOL;

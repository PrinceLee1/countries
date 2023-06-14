<?php

use CountriesPackage\Countries;

require_once 'vendor/autoload.php';

$class = new Countries();

$message = $class->getCountries();
return $message;
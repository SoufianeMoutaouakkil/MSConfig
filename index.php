<?php

require_once 'vendor/autoload.php';

use SMConfig\SMConfig;
use Test\SMConfigTest;

$config = SMConfig::getInstance();
$configTest = new SMConfigTest();

var_dump($configTest);

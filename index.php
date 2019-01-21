<?php

// composer autoloader for required packages and dependencies
require_once('vendor/autoload.php');

/** @var \Base $f3 */
$f3 = \Base::instance();

// show all errors
ini_set('display_errors', 1);
error_reporting(-1);

// html5 mode
$f3->BITMASK = ENT_COMPAT|ENT_SUBSTITUTE;

$f3->config('app/config.ini');

$f3->run();

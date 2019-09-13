<?php

/**
 * WeTyper - An amazing and powerful blog system
 *
 * @author You Ming <youming@funcuter.org>
 */

define('WETYPER_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
*/

$wetyper = require_once __DIR__.'/../bootstrap/wetyper.php';

/*
|--------------------------------------------------------------------------
| Handle HTTP Requests
|--------------------------------------------------------------------------
*/

$wetyper->handleRequest();

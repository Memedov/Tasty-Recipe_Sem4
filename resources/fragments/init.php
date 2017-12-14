<?php

/* 
 * This code must be executed before a HTTP request can be handled.
 */
use classes\util\Startup;
require_once 'classes/util/Startup.php';
Startup::initrequest();


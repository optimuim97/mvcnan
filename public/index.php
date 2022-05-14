<?php

use Mvcnan\Http\Request;
use Mvcnan\Http\Response;
use Mvcnan\Http\Route;

require_once __DIR__.'/../src/Support/helpers.php';
require_once base_path().'/vendor/autoload.php';
require_once base_path().'/routes/web.php';

// var_dump(Request::path());

// $route = new Route(new Request, new Response);
// $route->resolve();

var_dump(base_path());
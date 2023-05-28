<?php

require __DIR__. '/vendor/autoload.php';

/**
 * Simple Route handler
 * maps pretty url to respective controller
*/
$routeConfig = require_once('routes.php'); 
$uri =  str_replace('?'.$_SERVER['QUERY_STRING'], '', str_replace('/cocktailapp', '',$_SERVER['REQUEST_URI'] ));

foreach($routeConfig as $route){

    // check for matching routes in the route config
    if($route[0] === $_SERVER['REQUEST_METHOD'] && $route[2] === $uri){
        $controllerName = explode('@', $route[1])[0];
        $method = explode('@', $route[1])[1];

        // return matching conroller
        $controller = new $controllerName;
        return $controller->$method();
    }
}

// if no matching route then 404
header("HTTP/1.0 404 Not Found");
echo '404';


<?php

namespace App\Middleware;

class GuestMiddleware extends Middleware
{
    protected $container;
    
    function __invoke($request, $response, $next) 
    {
        if ($this->container->auth->check()) {
            return $response->withRedirect($this->container->router->pathFor('home'));
        }
        $response = $next($request, $response);
        return $response;
    }

}

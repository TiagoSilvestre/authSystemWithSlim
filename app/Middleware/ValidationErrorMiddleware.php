<?php

namespace App\Middleware;

class ValidationErrorMiddleware extends Middleware
{
    protected $container;
    
    function __invoke($request, $response, $next) 
    {
        if (isset($_SESSION['errors'])) {
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
            unset($_SESSION['errors']);
        }
        $response = $next($request, $response);
        return $response;
    }

}

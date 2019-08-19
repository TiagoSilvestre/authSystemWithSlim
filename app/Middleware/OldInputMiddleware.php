<?php

namespace App\Middleware;

class OldInputMiddleware extends Middleware
{
    protected $container;
    
    function __invoke($request, $response, $next) 
    {
        if (isset($_SESSION['old'])) {
            $this->container->view->getEnvironment()->addGlobal('old', $_SESSION['old']);
            $_SESSION['old'] = $request->getParams();
        }
        $response = $next($request, $response);
        return $response;
    }

}

<?php

namespace App\Middleware;

class Middleware 
{
    protected $container;
    
    function __construct($container) 
    {
        $this->container = $container;
    }

}

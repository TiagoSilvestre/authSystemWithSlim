<?php

namespace App\Controllers;

use App\Models\User;
use Slim\Views\Twig as View;

class HomeController extends Controller
{

    public function index($request, $response) 
    {
//        User::create([
//            'name' => 'Vanrri',
//            'email' => 'tjeitje@tet.com',
//            'password' => '1234'
//        ]);
        
// $this->flash->addMessage('error', 'Test flash message');
        return $this->view->render($response, 'home.twig');
    }
}

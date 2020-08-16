<?php

namespace App\Controllers;

use Core\View;

class Login extends \Core\Controller
{
    public function index()
    {
        View::renderTemplate('Login/index.html');
    }
}
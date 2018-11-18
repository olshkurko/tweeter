<?php

namespace App\Controllers;

use Framework\View;

class Testcontroller
{
    public function empty()
    {
        View::render('empty');
    }
    public function pages($userName)
    {
        View::render($userName);
    }
    public function feed()
    {
        View::render('feed');
    }
    public function forgotPassword()
    {
        View::render('forgot-password');
    }
    public function login()
    {
        View::render('login');
    }
    public function profile()
    {
        View::render('profile');
    }
    public function register()
    {
        View::render('register');
    }
    public function settings()
    {
        View::render('settings');
    }

}

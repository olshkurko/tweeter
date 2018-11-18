<?php

use Framework\Router;

Router::group(['namespace' => '\App\Controllers'], function(){
    Router::get('/{userName}', 'Testcontroller@pages');
    Router::get('/', 'Testcontroller@empty');
    Router::get('/feed', 'Testcontroller@feed');
    Router::get('/forgot-password', 'Testcontroller@forgotPassword');
    Router::get('/login', 'Testcontroller@login');
    Router::get('/profile', 'Testcontroller@profile');
    Router::get('/register', 'Testcontroller@register');
    Router::get('/settings', 'Testcontroller@settings');
}); 
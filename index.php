<?php
require 'Class/Router.php';

// Definir rutas
Router::post('api/login', function() {
    require 'Controllers/login.php';
});

Router::get('api/users', function() {
    require 'Controllers/users.php';
});

Router::handleRequest();
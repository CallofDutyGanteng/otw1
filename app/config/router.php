<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/login','auth::login');
$router->add('/home','index::index');
$router->add('/logout','auth::logout');

$router->handle();

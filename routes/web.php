<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('/data', 'MemberController@addingData');
$router->delete('/data', 'MemberController@deletingData');
$router->put('/data', 'MemberController@updatingData');
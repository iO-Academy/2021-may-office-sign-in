<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', 'HomePageController');
    $app->get('/newVisitor', 'AddVisitorController');
    $app->get('/admin', 'AdminPageController');

    $app->post('/newVisitor', 'AddVisitorFormController');

};

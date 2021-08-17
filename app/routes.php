<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', 'HomePageController');
    $app->get('/admin', 'AdminPageController');
    $app->get('/newVisitor', 'AddVisitorController');
    $app->get('/newVisitor/error','ErrorController' );

    $app->post('/newVisitor', 'AddVisitorFormController');

};

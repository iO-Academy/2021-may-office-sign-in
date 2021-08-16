<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', 'HomePageController');
    $app->get('/newVisitor', 'AddVisitorPageController');
    $app->get('/login', 'AdminLogInPageController');
    $app->get('/admin', 'AdminPageController');
//    $container = $app->getContainer();
//
//    $app->get('/', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "index.php", $args);
//    });

};

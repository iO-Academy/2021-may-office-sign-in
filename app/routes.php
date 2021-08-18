<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', 'HomePageController');
    $app->get('/admin', 'AdminPageController');
    $app->get('/newVisitor', 'AddVisitorController');
    $app->get('/guestSignOut', 'SignOutController');


    $app->post('/newVisitor', 'AddVisitorFormController');
    $app->post('/admin', 'AdminPageVisitorListController');
    $app->post('/search', 'SignOutSearchController');

};

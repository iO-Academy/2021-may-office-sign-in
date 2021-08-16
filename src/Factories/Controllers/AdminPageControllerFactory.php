<?php

namespace App\Factories\Controllers;

use App\Controllers\AdminPageController;
use App\Models\VisitorModel;
use Psr\Container\ContainerInterface;

class AdminPageControllerFactory
{

    public function __invoke(ContainerInterface $container): AdminPageController
    {
        $renderer = $container->get('renderer');
        $model = $container->get('VisitorModel');
        return new AdminPageController($renderer, $model);
    }
}
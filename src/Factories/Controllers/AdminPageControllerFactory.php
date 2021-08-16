<?php

namespace App\Factories\Controllers;

use App\Controllers\AdminPageController;
use Psr\Container\ContainerInterface;

class AdminPageControllerFactory
{

    public function __invoke(ContainerInterface $container): AdminPageController
    {
        $renderer = $container->get('renderer');
        return new AdminPageController($renderer);
    }
}
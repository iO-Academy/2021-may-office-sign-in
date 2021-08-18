<?php

namespace App\Factories\Controllers;

use App\Controllers\SignOutVisitorController;
use Psr\Container\ContainerInterface;

class SignOutVisitorControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('VisitorModel');
        $renderer = $container->get('renderer');
        return new SignOutVisitorController($model, $renderer);
    }
}
<?php

namespace App\Factories\Model;

use App\Models\VisitorModel;

class VisitorModelFactory
{
    public function __invoke($container)
    {
        $db = $container->get('dbConnection');
        return new VisitorModel($db);
    }
}
<?php

namespace App\Controllers;

use Slim\Views\PhpRenderer;

class HomePageController
{
    private $renderer;

    /**
     * @param $renderer
     */
    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

}
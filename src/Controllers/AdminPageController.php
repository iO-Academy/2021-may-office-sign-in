<?php

namespace App\Controllers;

use App\Abstracts\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AdminPageController extends Controller
{
    private $renderer;

    /**
     * @param $renderer
     */
    public function __construct($renderer)
    {
        $this->renderer = $renderer;
    }


    public function __invoke(Request $request, Response $response, array $args)
    {
        return $this->renderer->render($response, 'adminPage.phtml', $args);
    }
}
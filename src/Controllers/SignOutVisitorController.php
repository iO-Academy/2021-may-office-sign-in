<?php

namespace App\Controllers;

use App\Abstracts\Controller;
use App\Models\VisitorModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class SignOutVisitorController extends Controller
{
    private VisitorModel $model;
    private PhpRenderer $renderer;

    public function __construct($model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $name = $request->getParsedBody();
        $this->model->signOutVisitor($name);
        return $response->withHeader('Location', '/');

    }
}
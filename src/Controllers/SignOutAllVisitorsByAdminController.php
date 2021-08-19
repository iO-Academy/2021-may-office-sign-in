<?php

namespace App\Controllers;

use App\Abstracts\Controller;
use App\Models\VisitorModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SignOutAllVisitorsByAdminController extends Controller
{
    private VisitorModel $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $names = $request->getParsedBody();
        $name = explode(',',$names['name']);
        $this->model->signOutAllVisitor($name);
        return $response->withHeader('Location', '/admin');

    }
}
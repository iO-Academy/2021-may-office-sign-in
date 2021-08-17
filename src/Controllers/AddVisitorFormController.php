<?php

namespace App\Controllers;

use App\Abstracts\Controller;
use App\Models\VisitorModel;

class AddVisitorFormController extends Controller
{
    private VisitorModel $model;

    /**
     * @param VisitorModel $model
     */
    public function __construct(VisitorModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $visitor = $request->getParsedBody();
        var_dump($visitor);
        if (count($visitor['name']) === 0 || !is_string($visitor['name'])) {
            return $response->withheader('Location','/newVisitor/error');
        } else {
            $this->model->addVisitor($visitor);
            return $response->withheader('Location', '/');
        }
    }
}
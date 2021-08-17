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
        print_r($visitor);
        //validation
        $this->model->addVisitor($visitor);
        return $response->withheader('Location','/');
    }
}
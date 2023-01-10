<?php

namespace controller;

use lib\Controller;
use model\User;

class UsersController extends Controller {
    public function index(): string
    {
        $model = new User();
        $data = $model->getList();
        $properties = $model->properties;
        return $this->render(dirname(__FILE__) . '/../view/users.php', [
            'data' => $data,
            'properties' => $properties
        ]);

    }
}
<?php

namespace controller;

use lib\Controller;
use model\User;

/**
 * Controller of the users page.
 */
class UsersController extends Controller {
    /**
     * {@inheritDoc}
     */
    public function index(): string
    {
        $model = new User();
        $data = $model->findAll();
        $properties = $model->properties;
        return $this->render(dirname(__FILE__) . '/../view/users.php', [
            'data' => $data,
            'properties' => $properties
        ]);

    }
}
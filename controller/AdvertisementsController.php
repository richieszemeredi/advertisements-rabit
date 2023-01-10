<?php

namespace controller;

use lib\Controller;
use model\Advertisement;

class AdvertisementsController extends Controller {
    /**
     * {@inheritDoc}
     */
    public function index(): string
    {
        $model = new Advertisement();
        $data = $model->findAll();
        $properties = $model->properties;
        return $this->render(dirname(__FILE__) . '/../view/advertisements.php', [
            'data' => $data,
            'properties' => $properties
        ]);
    }
}
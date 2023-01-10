<?php

namespace model;

use Model;

class Advertisement extends Model {
    public $table = 'advertisement';

    public static array $properties = [
        'title' => 'Title'
    ];

}
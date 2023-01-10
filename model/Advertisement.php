<?php

namespace model;

use lib\Model;

class Advertisement extends Model {
    public string $table = 'advertisements';
    public array $properties = [
        'title' => 'Title'
    ];
}
<?php

namespace model;

use lib\Model;

class User extends Model {
    public string $table = 'users';
    public array $properties = [
        'name' => 'Name'
    ];
}
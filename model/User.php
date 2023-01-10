<?php

namespace model;

use lib\Model;

/**
 * Model representation of users.
 */
class User extends Model {
    public string $table = 'users';
    public array $properties = [
        'id' => 'ID',
        'name' => 'Name'
    ];
}
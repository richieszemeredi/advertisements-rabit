<?php

namespace model;

class User extends Model {
    public string $table = 'users';
    public array $properties = [
        'name' => 'Name'
    ];


}
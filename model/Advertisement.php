<?php

namespace model;

use lib\Database;
use lib\Model;

class Advertisement extends Model {
    public string $table = 'advertisements';
    public array $properties = [
        'id' => 'ID',
        'title' => 'Title',
        'user' => 'User'
    ];

    public function getList()
    {
        $advertisements = Database::connection()->query("select advertisements.id, title, name as 'user' from advertisements left join users on advertisements.userId = users.id;");
        return $advertisements;
    }
}
<?php

namespace model;

use lib\Database;
use lib\Model;
use mysqli_result;

/**
 * Model representation of advertisements.
 */
class Advertisement extends Model {
    public string $table = 'advertisements';
    public array $properties = [
        'id' => 'ID',
        'title' => 'Title',
        'user' => 'User'
    ];

    /**
     * {@inheritDoc}
     */
    public function findAll(): mysqli_result|bool
    {
        return Database::connection()->query("select advertisements.id, title, name as 'user' from advertisements left join users on advertisements.userId = users.id;");
    }
}
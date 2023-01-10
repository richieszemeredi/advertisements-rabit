<?php

namespace lib;

use mysqli_result;

/**
 * A representation of an entity.
 */
class Model {
    /**
     * @var string Name of the table in database.
     */
    public string $table = '';

    /**
     * @var array Properties to show on the template.
     */
    public array $properties = [];

    /**
     * Returns all entities from the table.
     *
     * @return bool|mysqli_result
     */
    public function findAll(): mysqli_result|bool
    {
        return Database::connection()->query("SELECT * FROM $this->table");
    }
}
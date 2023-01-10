<?php

namespace model;

class Model {
    public string $table = '';

    public array $properties = [];

    public function getList()
    {
        return \Database::connection()->query("SELECT * FROM $this->table");
    }
}
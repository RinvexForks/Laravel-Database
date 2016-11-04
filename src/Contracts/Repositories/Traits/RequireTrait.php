<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface RequireTrait
{
    public function requireBy($column, $value, $columns = ['*']);

    public function requireById($id, $columns = ['*']);
}
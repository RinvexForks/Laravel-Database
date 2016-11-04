<?php

namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

abstract class Criterion
{
    abstract public function apply(Model $model, Repository $repository);
}
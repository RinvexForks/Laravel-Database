<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Repositories\Decorators;

use BrianFaust\Database\Contracts\Repositories\Repository;

abstract class AbstractDecorator
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}

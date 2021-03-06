<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface HashidTrait
{
    public function findByHashid($hashid, $columns = ['*']);

    public function requireByHashid($hashid, $columns = ['*']);

    public function updateByHashid($hashid, array $data);

    public function deleteByHashid($hashid);
}

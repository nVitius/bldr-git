<?php

/**
 * This file is part of Bldr.io
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\Extension\Git\Call\Remote;

use Bldr\Extension\Git\Call\AbstractGitCall;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class AddCall extends AbstractGitCall
{
    /**
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        if (sizeof($arguments) !== 2) {
            throw new \Exception("git:remote:add requires two arguments. A remote name, and a remote URL");
        }

        return $this->executeCall->run(['git', 'remote', 'add', $arguments[0], $arguments[1]]);
    }
}

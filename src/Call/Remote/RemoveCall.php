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
class RemoveCall extends AbstractGitCall
{
    /**
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        if (sizeof($arguments) !== 1) {
            throw new \Exception("git:remote:remove requires once arguments. A remote name.");
        }

        return $this->executeCall->run(['git', 'remote', 'remove', $arguments[0]]);
    }
}

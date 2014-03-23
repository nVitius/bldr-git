<?php

/**
 * This file is part of Bldr.io
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\Extension\Git\Call;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class AddCall extends AbstractGitCall
{
    /**
     * Assumes arguments passed to call are file names
     *
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        return $this->executeCall->run(array_merge(['git', 'add'], $arguments));
    }
}

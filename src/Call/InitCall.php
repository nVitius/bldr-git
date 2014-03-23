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
class InitCall extends AbstractGitCall
{
    /**
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        return $this->executeCall->run(['git', 'init']);
    }
}

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
class ConfigCall extends AbstractGitCall
{
    /**
     * Assumes arguments passed to call are file names, if any.
     *
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        $args = [
            'git',
            'config'
        ];

        if ($this->call->has('global') && $this->call->global === true) {
            $args[] = '--global';
        }

        return $this->executeCall->run(array_merge($args, $arguments));
    }
}

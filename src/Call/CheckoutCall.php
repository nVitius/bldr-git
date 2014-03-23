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
class CheckoutCall extends AbstractGitCall
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
            'checkout'
        ];

        if ($this->call->has('branch')) {
            $args[] = '-b';
            $args[] = $this->call->branch;
        } elseif ($this->call->has('hash')) {
            $args[] = $this->call->hash;
        }

        return $this->executeCall->run($args);
    }
}

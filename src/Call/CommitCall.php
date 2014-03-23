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
class CommitCall extends AbstractGitCall
{
    /**
     * Assumes arguments passed to call are file names, if any.
     *
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        if (!$this->call->has('message')) {
            throw new \Exception("Message is required to commit");
        }

        if ($this->call->has('all') && $this->call->all === true) {
            return $this->executeCall->run(['git commit -am', $this->call->message]);
        }

        return $this->executeCall->run(array_merge(['git', 'commit', '-m', $this->call->message], $arguments));
    }
}

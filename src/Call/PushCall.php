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
class PushCall extends AbstractGitCall
{
    /**
     * Assumes arguments passed to call are file names, if any.
     *
     * {@inheritCommand}
     */
    public function run(array $arguments)
    {
        if (!$this->call->has('remote')) {
            throw new \Exception("Remote is required to commit");
        }
        if (!$this->call->has('branch')) {
            throw new \Exception("Branch is required to commit");
        }

        $arguments = ['git', 'push'];
        if ($this->call->has('force')) {
            $arguments[] = '-f';
        }
        $arguments[] = $this->call->remote;
        $arguments[] = $this->call->branch;


        return $this->executeCall->run($arguments);
    }
}

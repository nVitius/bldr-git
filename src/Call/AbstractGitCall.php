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

use Bldr\Call\AbstractCall;
use Bldr\Extension\Execute\Call\ExecuteCall;
use Bldr\Model\Call;
use Bldr\Model\Task;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

/**
 * @author Aaron Scherer <aequasi@gmail.com.com>
 */
abstract class AbstractGitCall extends AbstractCall
{
    /**
     * @var ExecuteCall $executeCall
     */
    protected $executeCall;

    /**
     * @param ExecuteCall $executeCall
     */
    public function __construct(ExecuteCall $executeCall)
    {
        $this->executeCall = $executeCall;
    }

    public function initialize(
        InputInterface $input,
        OutputInterface $output,
        HelperSet $helperSet,
        ParameterBag $config
    ) {
        $this->executeCall->initialize($input, $output, $helperSet, $config);
        return parent::initialize($input, $output, $helperSet, $config);
    }

    public function setTask(Task $task)
    {
        $this->executeCall->setTask($task);
        return parent::setTask($task);
    }

    public function setCall(Call $call)
    {
        $this->executeCall->setCall($call);
        return parent::setCall($call);
    }
}

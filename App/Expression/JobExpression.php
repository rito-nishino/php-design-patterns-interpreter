<?php

namespace App\Expression;

use App\Expression\Interfaces\ExpressionInterface;
use App\Context\Context;
use App\Expression\CommandExpression;

class JobExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        if ($context->getCommand() !== '$') {
            throw new Exception('Missing opening tag "$"');
        }
        $command_list = new CommandExpression();
        $command_list->execute($context->next());
    }
}
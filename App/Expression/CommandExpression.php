<?php

namespace App\Expression;

use App\Expression\Interfaces\ExpressionInterface;
use App\Context\Context;

class CommandExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        while (true) {
            $text = $context->getCommand();
            if (is_null($text)) {
                throw new Exception('There is no closing command "/"');
            } else if ($text === '/') {
                break;
            } else {
                $expression = new DatetimeExpression();
                $expression->execute($context);
            }
            $context->next();
        }
    }
}
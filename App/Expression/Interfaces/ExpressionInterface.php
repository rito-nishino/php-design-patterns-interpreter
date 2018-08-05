<?php

namespace App\Expression\Interfaces;

use App\Context\Context;

interface ExpressionInterface
{
    public function execute(Context $context);
}
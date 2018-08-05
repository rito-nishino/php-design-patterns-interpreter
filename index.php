<?php
require_once 'autoload.php';

use App\Context\Context;
use App\Expression\JobExpression;

// コマンド
$command = '$ year month day time second /';

$job = new JobExpression();
$job->execute(new Context($command));
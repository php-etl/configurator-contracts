<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use PhpParser\Node;

interface StepRepositoryInterface extends RepositoryInterface
{
    public function withLogger(Node\Expr $logger): self;
}

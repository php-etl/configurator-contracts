<?php declare(strict_types=1);

namespace Kiboko\Contract\ETL\Configurator;

use PhpParser\Node;

interface FileInterface
{
    public function getPathname(): string;
    public function getNode(): Node;
}
<?php declare(strict_types=1);

namespace Kiboko\Contract\ETL\Configurator;

use PhpParser\Builder;

interface RepositoryInterface
{
    public function addFiles(FileInterface ...$file): self;
    public function addPackages(string ...$package): self;
    public function getBuilder(): Builder;
    public function merge(RepositoryInterface $friend): self;
}

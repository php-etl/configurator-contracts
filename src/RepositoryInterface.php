<?php declare(strict_types=1);

namespace Kiboko\Contract\ETL\Configurator;

use PhpParser\Builder;

interface RepositoryInterface
{
    public function addFiles(FileInterface ...$files): self;
    public function addPackages(string ...$packages): self;
    public function getBuilder(): Builder;
    public function merge(RepositoryInterface $friend): self;
}

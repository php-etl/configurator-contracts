<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use Kiboko\Contract\Packaging\DirectoryInterface;
use Kiboko\Contract\Packaging\FileInterface;
use PhpParser\Builder;

interface RepositoryInterface
{
    public function addFiles(FileInterface|DirectoryInterface ...$files): self;
    /** @return iterable<FileInterface> */
    public function getFiles(): iterable;
    public function addPackages(string ...$packages): self;
    /** @return iterable<string> */
    public function getPackages(): iterable;
    public function getBuilder(): Builder;
    public function merge(RepositoryInterface $friend): self;
}

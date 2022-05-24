<?php

declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use Kiboko\Contract\Packaging;

interface SatelliteBuilderInterface
{
    public function withComposerPSR4Autoload(string $namespace, string ...$paths): SatelliteBuilderInterface;

    public function withComposerRequire(string ...$package): SatelliteBuilderInterface;

    public function withComposerFile(
        Packaging\FileInterface|Packaging\AssetInterface $composerJsonFile,
        null|Packaging\FileInterface|Packaging\AssetInterface $composerLockFile = null
    ): SatelliteBuilderInterface;

    public function withFile(
        Packaging\FileInterface|Packaging\AssetInterface $source,
        ?string $destinationPath = null
    ): SatelliteBuilderInterface;

    public function withDirectory(
        Packaging\DirectoryInterface $source,
        ?string $destinationPath = null
    ): SatelliteBuilderInterface;

    public function build(): SatelliteInterface;
}

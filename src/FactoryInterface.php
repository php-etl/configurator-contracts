<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

use PhpParser\Builder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

interface FactoryInterface
{
    public function configuration(): ConfigurationInterface;

    /**
     * @param array<string,string> $config
     * @return array<string,string>
     * @throws ConfigurationExceptionInterface
     */
    public function normalize(array $config): array;

    /**
     * @param array<string,string> $config
     */
    public function validate(array $config): bool;

    /**
     * @param array<string,string> $config
     * @return Builder
     */
    public function compile(array $config): Builder;
}

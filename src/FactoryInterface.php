<?php declare(strict_types=1);

namespace Kiboko\Component\ETL\Contract\Configurator;

use PhpParser\Node;
use Symfony\Component\Config\Definition\ConfigurationInterface;

interface FactoryInterface
{
    public function configuration(): ConfigurationInterface;
    /** @throws ConfigurationExceptionInterface */
    public function normalize(array $config): array;
    public function validate(array $config): bool;
    /** @return array<Node> */
    public function compile(array $config): array;
}

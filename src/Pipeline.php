<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class Pipeline
{
    public function __construct(
        private string $name,
        private array $dependencies,
        private array $steps,
    ) {}
}

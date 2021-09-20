<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS)]
final class Plugin
{
    public function __construct(
        public string $name,
    ) {}
}

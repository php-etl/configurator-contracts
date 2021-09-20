<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class PipelineStepExtractor
{
    public function __construct(
        public string $name = 'extractor',
    ) {}
}

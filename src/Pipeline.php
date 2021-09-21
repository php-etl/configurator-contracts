<?php declare(strict_types=1);

namespace Kiboko\Contract\Configurator;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class Pipeline
{
    /** @var list<Pipeline\StepExtractor|Pipeline\StepTransformer|Pipeline\StepLoader> */
    public array $steps = [];

    public function __construct(
        public string $name,
        public array $dependencies = [],
        array $steps = [],
    ) {
        foreach ($steps as $name => $type) {
            if ($type instanceof Pipeline\StepExtractor
                || $type instanceof Pipeline\StepTransformer
                || $type instanceof Pipeline\StepLoader
            ) {
                $this->steps[] = $type;
                continue;
            }

            if ($type === 'extractor') {
                $this->steps[] = new Pipeline\StepExtractor(name: $name);
                continue;
            }

            if ($type === 'transformer') {
                $this->steps[] = new Pipeline\StepTransformer(name: $name);
                continue;
            }

            if ($type === 'loader') {
                $this->steps[] = new Pipeline\StepLoader(name: $name);
                continue;
            }
        }
    }
}
